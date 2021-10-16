// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * This module provides a wrapper to encapsulate a lot of the common combinations of
 * user interaction we use in Moodle.
 *
 * @module     core/custom_interaction_events
 * @class      custom_interaction_events
 * @package    core
 * @copyright  2016 Ryan Wyllie <ryan@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @since      3.2
 */
define(['jquery', 'core/key_codes'], function($, keyCodes) {
    // The list of events provided by this module. Namespaced to avoid clashes.
    var events = {
        activate: 'cie:activate',
        keyboardActivate: 'cie:keyboardactivate',
        escape: 'cie:escape',
        down: 'cie:down',
        up: 'cie:up',
        home: 'cie:home',
        end: 'cie:end',
        next: 'cie:next',
        previous: 'cie:previous',
        asterix: 'cie:asterix',
        scrollLock: 'cie:scrollLock',
        scrollTop: 'cie:scrollTop',
        scrollBottom: 'cie:scrollBottom',
        ctrlPageUp: 'cie:ctrlPageUp',
        ctrlPageDown: 'cie:ctrlPageDown',
        enter: 'cie:enter',
        accessibleChange: 'cie:accessibleChange',
    };
    // Static cache of jQuery events that have been handled. This should
    // only be populated by JavaScript generated events (which will keep it
    // fairly small).
    var triggeredEvents = {};

    /**
     * Check if the caller has asked for the given event type to be
     * registered.
     *
     * @method shouldAddEvent
     * @private
     * @param {string} eventType name of the event (see events above)
     * @param {array} include the list of events to be added
     * @return {bool} true if the event should be added, false otherwise.
     */
    var shouldAddEvent = function(eventType, include) {
        include = include || [];

        if (include.length && include.indexOf(eventType) !== -1) {
            return true;
        }

        return false;
    };

    /**
     * Check if any of the modifier keys have been pressed on the event.
     *
     * @method isModifierPressed
     * @private
     * @param {event} e jQuery event
     * @return {bool} true if shift, meta (command on Mac), alt or ctrl are pressed
     */
    var isModifierPressed = function(e) {
        return (e.shiftKey || e.metaKey || e.altKey || e.ctrlKey);
    };

    /**
     * Trigger the custom event for the given jQuery event.
     *
     * This function will only fire the custom event if one hasn't already been
     * fired for the jQuery event.
     *
     * This is to prevent multiple custom event handlers triggering multiple
     * custom events for a single jQuery event as it bubbles up the stack.
     *
     * @param  {string} eventName The name of the custom event
     * @param  {event} e          The jQuery event
     * @return {void}
     */
    var triggerEvent = function(eventName, e) {
        var eventTypeKey = "";

        if (!e.hasOwnProperty('originalEvent')) {
            // This is a jQuery event generated from JavaScript not a browser event so
            // we need to build the cache key for the event.
            eventTypeKey = "" + eventName + e.type + e.timeStamp;

            if (!triggeredEvents.hasOwnProperty(eventTypeKey)) {
                // If we haven't seen this jQuery event before then fire a custom
                // event for it and remember the event for later.
                triggeredEvents[eventTypeKey] = true;
                $(e.target).trigger(eventName, [{originalEvent: e}]);
            }
            return;
        }

        eventTypeKey = "triggeredCustom_" + eventName;
        if (!e.originalEvent.hasOwnProperty(eventTypeKey)) {
            // If this is a jQuery event generated by the browser then set a
            // property on the original event to track that we've seen it before.
            // The property is set on the original event because it's the only part
            // of the jQuery event that is maintained through multiple event handlers.
            e.originalEvent[eventTypeKey] = true;
            $(e.target).trigger(eventName, [{originalEvent: e}]);
            return;
        }
    };

    /**
     * Register a keyboard event that ignores modifier keys.
     *
     * @method addKeyboardEvent
     * @private
     * @param {object} element A jQuery object of the element to bind events to
     * @param {string} event The custom interaction event name
     * @param {int} keyCode The key code.
     */
    var addKeyboardEvent = function(element, event, keyCode) {
        element.off('keydown.' + event).on('keydown.' + event, function(e) {
            if (!isModifierPressed(e)) {
                if (e.keyCode == keyCode) {
                    triggerEvent(event, e);
                }
            }
        });
    };

    /**
     * Trigger the activate event on the given element if it is clicked or the enter
     * or space key are pressed without a modifier key.
     *
     * @method addActivateListener
     * @private
     * @param {object} element jQuery object to add event listeners to
     */
    var addActivateListener = function(element) {
        element.off('click.cie.activate').on('click.cie.activate', function(e) {
            triggerEvent(events.activate, e);
        });
        element.off('keydown.cie.activate').on('keydown.cie.activate', function(e) {
            if (!isModifierPressed(e)) {
                if (e.keyCode == keyCodes.enter || e.keyCode == keyCodes.space) {
                    triggerEvent(events.activate, e);
                }
            }
        });
    };

    /**
     * Trigger the keyboard activate event on the given element if the enter
     * or space key are pressed without a modifier key.
     *
     * @method addKeyboardActivateListener
     * @private
     * @param {object} element jQuery object to add event listeners to
     */
    var addKeyboardActivateListener = function(element) {
        element.off('keydown.cie.keyboardactivate').on('keydown.cie.keyboardactivate', function(e) {
            if (!isModifierPressed(e)) {
                if (e.keyCode == keyCodes.enter || e.keyCode == keyCodes.space) {
                    triggerEvent(events.keyboardActivate, e);
                }
            }
        });
    };

    /**
     * Trigger the escape event on the given element if the escape key is pressed
     * without a modifier key.
     *
     * @method addEscapeListener
     * @private
     * @param {object} element jQuery object to add event listeners to
     */
    var addEscapeListener = function(element) {
        addKeyboardEvent(element, events.escape, keyCodes.escape);
    };

    /**
     * Trigger the down event on the given element if the down arrow key is pressed
     * without a modifier key.
     *
     * @method addDownListener
     * @private
     * @param {object} element jQuery object to add event listeners to
     */
    var addDownListener = function(element) {
        addKeyboardEvent(element, events.down, keyCodes.arrowDown);
    };

    /**
     * Trigger the up event on the given element if the up arrow key is pressed
     * without a modifier key.
     *
     * @method addUpListener
     * @private
     * @param {object} element jQuery object to add event listeners to
     */
    var addUpListener = function(element) {
        addKeyboardEvent(element, events.up, keyCodes.arrowUp);
    };

    /**
     * Trigger the home event on the given element if the home key is pressed
     * without a modifier key.
     *
     * @method addHomeListener
     * @private
     * @param {object} element jQuery object to add event listeners to
     */
    var addHomeListener = function(element) {
        addKeyboardEvent(element, events.home, keyCodes.home);
    };

    /**
     * Trigger the end event on the given element if the end key is pressed
     * without a modifier key.
     *
     * @method addEndListener
     * @private
     * @param {object} element jQuery object to add event listeners to
     */
    var addEndListener = function(element) {
        addKeyboardEvent(element, events.end, keyCodes.end);
    };

    /**
     * Trigger the next event on the given element if the right arrow key is pressed
     * without a modifier key in LTR mode or left arrow key in RTL mode.
     *
     * @method addNextListener
     * @private
     * @param {object} element jQuery object to add event listeners to
     */
    var addNextListener = function(element) {
        // Left and right are flipped in RTL mode.
        var keyCode = $('html').attr('dir') == "rtl" ? keyCodes.arrowLeft : keyCodes.arrowRight;

        addKeyboardEvent(element, events.next, keyCode);
    };

    /**
     * Trigger the previous event on the given element if the left arrow key is pressed
     * without a modifier key in LTR mode or right arrow key in RTL mode.
     *
     * @method addPreviousListener
     * @private
     * @param {object} element jQuery object to add event listeners to
     */
    var addPreviousListener = function(element) {
        // Left and right are flipped in RTL mode.
        var keyCode = $('html').attr('dir') == "rtl" ? keyCodes.arrowRight : keyCodes.arrowLeft;

        addKeyboardEvent(element, events.previous, keyCode);
    };

    /**
     * Trigger the asterix event on the given element if the asterix key is pressed
     * without a modifier key.
     *
     * @method addAsterixListener
     * @private
     * @param {object} element jQuery object to add event listeners to
     */
    var addAsterixListener = function(element) {
        addKeyboardEvent(element, events.asterix, keyCodes.asterix);
    };


    /**
     * Trigger the scrollTop event on the given element if the user scrolls to
     * the top of the given element.
     *
     * @method addScrollTopListener
     * @private
     * @param {object} element jQuery object to add event listeners to
     */
    var addScrollTopListener = function(element) {
        element.off('scroll.cie.scrollTop').on('scroll.cie.scrollTop', function(e) {
            var scrollTop = element.scrollTop();
            if (scrollTop === 0) {
                triggerEvent(events.scrollTop, e);
            }
        });
    };

    /**
     * Trigger the scrollBottom event on the given element if the user scrolls to
     * the bottom of the given element.
     *
     * @method addScrollBottomListener
     * @private
     * @param {object} element jQuery object to add event listeners to
     */
    var addScrollBottomListener = function(element) {
        element.off('scroll.cie.scrollBottom').on('scroll.cie.scrollBottom', function(e) {
            var scrollTop = element.scrollTop();
            var innerHeight = element.innerHeight();
            var scrollHeight = element[0].scrollHeight;

            if (scrollTop + innerHeight >= scrollHeight) {
                triggerEvent(events.scrollBottom, e);
            }
        });
    };

    /**
     * Trigger the scrollLock event on the given element if the user scrolls to
     * the bottom or top of the given element.
     *
     * @method addScrollLockListener
     * @private
     * @param {jQuery} element jQuery object to add event listeners to
     */
    var addScrollLockListener = function(element) {
        // Lock mousewheel scrolling within the element to stop the annoying window scroll.
        element.off('DOMMouseScroll.cie.DOMMouseScrollLock mousewheel.cie.mousewheelLock')
            .on('DOMMouseScroll.cie.DOMMouseScrollLock mousewheel.cie.mousewheelLock', function(e) {
                var scrollTop = element.scrollTop();
                var scrollHeight = element[0].scrollHeight;
                var height = element.height();
                var delta = (e.type == 'DOMMouseScroll' ?
                    e.originalEvent.detail * -40 :
                    e.originalEvent.wheelDelta);
                var up = delta > 0;

                if (!up && -delta > scrollHeight - height - scrollTop) {
                    // Scrolling down past the bottom.
                    element.scrollTop(scrollHeight);
                    e.stopPropagation();
                    e.preventDefault();
                    e.returnValue = false;
                    // Fire the scroll lock event.
                    triggerEvent(events.scrollLock, e);

                    return false;
                } else if (up && delta > scrollTop) {
                    // Scrolling up past the top.
                    element.scrollTop(0);
                    e.stopPropagation();
                    e.preventDefault();
                    e.returnValue = false;
                    // Fire the scroll lock event.
                    triggerEvent(events.scrollLock, e);

                    return false;
                }

                return true;
            });
    };

    /**
     * Trigger the ctrlPageUp event on the given element if the user presses the
     * control and page up key.
     *
     * @method addCtrlPageUpListener
     * @private
     * @param {object} element jQuery object to add event listeners to
     */
    var addCtrlPageUpListener = function(element) {
        element.off('keydown.cie.ctrlpageup').on('keydown.cie.ctrlpageup', function(e) {
            if (e.ctrlKey) {
                if (e.keyCode == keyCodes.pageUp) {
                    triggerEvent(events.ctrlPageUp, e);
                }
            }
        });
    };

    /**
     * Trigger the ctrlPageDown event on the given element if the user presses the
     * control and page down key.
     *
     * @method addCtrlPageDownListener
     * @private
     * @param {object} element jQuery object to add event listeners to
     */
    var addCtrlPageDownListener = function(element) {
        element.off('keydown.cie.ctrlpagedown').on('keydown.cie.ctrlpagedown', function(e) {
            if (e.ctrlKey) {
                if (e.keyCode == keyCodes.pageDown) {
                    triggerEvent(events.ctrlPageDown, e);
                }
            }
        });
    };

    /**
     * Trigger the enter event on the given element if the enter key is pressed
     * without a modifier key.
     *
     * @method addEnterListener
     * @private
     * @param {object} element jQuery object to add event listeners to
     */
    var addEnterListener = function(element) {
        addKeyboardEvent(element, events.enter, keyCodes.enter);
    };

    /**
     * Trigger the AccessibleChange event on the given element if the value of the element is changed.
     *
     * @method addAccessibleChangeListener
     * @private
     * @param {object} element jQuery object to add event listeners to
     */
    var addAccessibleChangeListener = function(element) {
        var onMac = navigator.userAgent.indexOf('Macintosh') !== -1;
        var touchEnabled = ('ontouchstart' in window) || (('msMaxTouchPoints' in navigator) && (navigator.msMaxTouchPoints > 0));
        if (onMac || touchEnabled) {
            // On Mac devices, and touch-enabled devices, the change event seems to be handled correctly and
            // consistently at this time.
            element.on('change', function(e) {
                triggerEvent(events.accessibleChange, e);
            });
        } else {
            // Some browsers have non-normalised behaviour for handling the selection of values in a <select> element.
            // When using Chrome on Linux (and possibly others), a 'change' event is fired when pressing the Escape key.
            // When using Firefox on Linux (and possibly others), a 'change' event is fired when navigating through the
            // list with a keyboard.
            //
            // To normalise these behaviours:
            // - the initial value is stored in a data attribute when focusing the element
            // - the current value is checked against the stored initial value when and the accessibleChange event fired when:
            // --- blurring the element
            // --- the 'Enter' key is pressed
            // --- the element is clicked
            // --- the 'change' event is fired, except where it is from a keyboard interaction
            //
            // To facilitate the change event keyboard interaction check, the 'keyDown' handler sets a flag to ignore
            // the change event handler which is unset on the 'keyUp' event.
            //
            // Unfortunately we cannot control this entirely as some browsers (Chrome) trigger a change event when
            // pressign the Escape key, and this is considered to be the correct behaviour.
            // Chrome https://bugs.chromium.org/p/chromium/issues/detail?id=839717
            //
            // Our longer-term solution to this should be to switch away from using <select> boxes as a single-select,
            // and make use of a dropdown of action links like the Bootstrap Dropdown menu.
            var setInitialValue = function(target) {
                target.dataset.initValue = target.value;
            };
            var resetToInitialValue = function(target) {
                if ('initValue' in target.dataset) {
                    target.value = target.dataset.initValue;
                }
            };
            var checkAndTriggerAccessibleChange = function(e) {
                if (!('initValue' in e.target.dataset)) {
                    // Some browsers trigger click before focus, therefore it is possible that initValue is undefined.
                    // In this case it's likely that it's being focused for the first time and we should therefore not submit.
                    return;
                }

                if (e.target.value !== e.target.dataset.initValue) {
                    // Update the initValue when the event is triggered.
                    // This means that if the click handler fires before the focus handler on a subsequent interaction
                    // with the element, the currently dispalyed value will be the best guess current value.
                    e.target.dataset.initValue = e.target.value;
                    triggerEvent(events.accessibleChange, e);
                }
            };
            var nativeElement = element.get()[0];
            // The `focus` and `blur` events do not support bubbling. Use Event Capture instead.
            nativeElement.addEventListener('focus', function(e) {
                setInitialValue(e.target);
            }, true);
            nativeElement.addEventListener('blur', function(e) {
                checkAndTriggerAccessibleChange(e);
            }, true);
            element.on('keydown', function(e) {
                if ((e.which === keyCodes.enter)) {
                    checkAndTriggerAccessibleChange(e);
                } else if (e.which === keyCodes.escape) {
                    resetToInitialValue(e.target);
                    e.target.dataset.ignoreChange = true;
                } else {
                    // Firefox triggers a change event when using the keyboard to scroll through the selection.
                    // Set a data- attribute that the change listener can use to ignore the change event where it was
                    // generated from a keyboard change such as typing to complete a value, or using arrow keys.
                    e.target.dataset.ignoreChange = true;

                }
            });
            element.on('change', function(e) {
                if (e.target.dataset.ignoreChange) {
                    // This change event was triggered from a keyboard change which is not yet complete.
                    // Do not trigger the accessibleChange event until the selection is completed using the [return]
                    // key.
                    return;
                }

                checkAndTriggerAccessibleChange(e);
            });
            element.on('keyup', function(e) {
                // The key has been lifted. Stop ignoring the change event.
                delete e.target.dataset.ignoreChange;
            });
            element.on('click', function(e) {
                checkAndTriggerAccessibleChange(e);
            });
        }
    };

    /**
     * Get the list of events and their handlers.
     *
     * @method getHandlers
     * @private
     * @return {object} object key of event names and value of handler functions
     */
    var getHandlers = function() {
        var handlers = {};

        handlers[events.activate] = addActivateListener;
        handlers[events.keyboardActivate] = addKeyboardActivateListener;
        handlers[events.escape] = addEscapeListener;
        handlers[events.down] = addDownListener;
        handlers[events.up] = addUpListener;
        handlers[events.home] = addHomeListener;
        handlers[events.end] = addEndListener;
        handlers[events.next] = addNextListener;
        handlers[events.previous] = addPreviousListener;
        handlers[events.asterix] = addAsterixListener;
        handlers[events.scrollLock] = addScrollLockListener;
        handlers[events.scrollTop] = addScrollTopListener;
        handlers[events.scrollBottom] = addScrollBottomListener;
        handlers[events.ctrlPageUp] = addCtrlPageUpListener;
        handlers[events.ctrlPageDown] = addCtrlPageDownListener;
        handlers[events.enter] = addEnterListener;
        handlers[events.accessibleChange] = addAccessibleChangeListener;

        return handlers;
    };

    /**
     * Add all of the listeners on the given element for the requested events.
     *
     * @method define
     * @public
     * @param {object} element the DOM element to register event listeners on
     * @param {array} include the array of events to be triggered
     */
    var define = function(element, include) {
        element = $(element);
        include = include || [];

        if (!element.length || !include.length) {
            return;
        }

        $.each(getHandlers(), function(eventType, handler) {
            if (shouldAddEvent(eventType, include)) {
                handler(element);
            }
        });
    };

    return /** @module core/custom_interaction_events */ {
        define: define,
        events: events,
    };
});
