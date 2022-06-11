/*!
 * Bootstrap v5.0.0-alpha3 (https://getbootstrap.com/)
 * Copyright 2011-2020 The Bootstrap Authors (https://github.com/twbs/bootstrap/graphs/contributors)
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 */
! function(t, e) { "object" == typeof exports && "undefined" != typeof module ? module.exports = e() : "function" == typeof define && define.amd ? define(e) : (t = "undefined" != typeof globalThis ? globalThis : t || self).bootstrap = e() }(this, (function() { "use strict";

    function t(t, e) { for (var n = 0; n < e.length; n++) { var i = e[n];
            i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(t, i.key, i) } }

    function e(e, n, i) { return n && t(e.prototype, n), i && t(e, i), e }

    function n() { return (n = Object.assign || function(t) { for (var e = 1; e < arguments.length; e++) { var n = arguments[e]; for (var i in n) Object.prototype.hasOwnProperty.call(n, i) && (t[i] = n[i]) } return t }).apply(this, arguments) } var i, o, r = function(t) { do { t += Math.floor(1e6 * Math.random()) } while (document.getElementById(t)); return t },
        s = function(t) { var e = t.getAttribute("data-target"); if (!e || "#" === e) { var n = t.getAttribute("href");
                e = n && "#" !== n ? n.trim() : null } return e },
        a = function(t) { var e = s(t); return e && document.querySelector(e) ? e : null },
        l = function(t) { var e = s(t); return e ? document.querySelector(e) : null },
        c = function(t) { if (!t) return 0; var e = window.getComputedStyle(t),
                n = e.transitionDuration,
                i = e.transitionDelay,
                o = parseFloat(n),
                r = parseFloat(i); return o || r ? (n = n.split(",")[0], i = i.split(",")[0], 1e3 * (parseFloat(n) + parseFloat(i))) : 0 },
        f = function(t) { t.dispatchEvent(new Event("transitionend")) },
        u = function(t) { return (t[0] || t).nodeType },
        h = function(t, e) { var n = !1,
                i = e + 5;
            t.addEventListener("transitionend", (function e() { n = !0, t.removeEventListener("transitionend", e) })), setTimeout((function() { n || f(t) }), i) },
        d = function(t, e, n) { Object.keys(n).forEach((function(i) { var o, r = n[i],
                    s = e[i],
                    a = s && u(s) ? "element" : null == (o = s) ? "" + o : {}.toString.call(o).match(/\s([a-z]+)/i)[1].toLowerCase(); if (!new RegExp(r).test(a)) throw new Error(t.toUpperCase() + ': Option "' + i + '" provided type "' + a + '" but expected type "' + r + '".') })) },
        p = function(t) { if (!t) return !1; if (t.style && t.parentNode && t.parentNode.style) { var e = getComputedStyle(t),
                    n = getComputedStyle(t.parentNode); return "none" !== e.display && "none" !== n.display && "hidden" !== e.visibility } return !1 },
        g = function() { return function() {} },
        m = function(t) { return t.offsetHeight },
        v = function() { var t = window.jQuery; return t && !document.body.hasAttribute("data-no-jquery") ? t : null },
        _ = function(t) { "loading" === document.readyState ? document.addEventListener("DOMContentLoaded", t) : t() },
        b = (i = {}, o = 1, { set: function(t, e, n) { void 0 === t.bsKey && (t.bsKey = { key: e, id: o }, o++), i[t.bsKey.id] = n }, get: function(t, e) { if (!t || void 0 === t.bsKey) return null; var n = t.bsKey; return n.key === e ? i[n.id] : null }, delete: function(t, e) { if (void 0 !== t.bsKey) { var n = t.bsKey;
                    n.key === e && (delete i[n.id], delete t.bsKey) } } }),
        y = function(t, e, n) { b.set(t, e, n) },
        w = function(t, e) { return b.get(t, e) },
        E = function(t, e) { b.delete(t, e) },
        T = /[^.]*(?=\..*)\.|.*/,
        L = /\..*/,
        k = /::\d+$/,
        C = {},
        O = 1,
        A = { mouseenter: "mouseover", mouseleave: "mouseout" },
        D = ["click", "dblclick", "mouseup", "mousedown", "contextmenu", "mousewheel", "DOMMouseScroll", "mouseover", "mouseout", "mousemove", "selectstart", "selectend", "keydown", "keypress", "keyup", "orientationchange", "touchstart", "touchmove", "touchend", "touchcancel", "pointerdown", "pointermove", "pointerup", "pointerleave", "pointercancel", "gesturestart", "gesturechange", "gestureend", "focus", "blur", "change", "reset", "select", "submit", "focusin", "focusout", "load", "unload", "beforeunload", "resize", "move", "DOMContentLoaded", "readystatechange", "error", "abort", "scroll"];

    function S(t, e) { return e && e + "::" + O++ || t.uidEvent || O++ }

    function x(t) { var e = S(t); return t.uidEvent = e, C[e] = C[e] || {}, C[e] }

    function N(t, e, n) { void 0 === n && (n = null); for (var i = Object.keys(t), o = 0, r = i.length; o < r; o++) { var s = t[i[o]]; if (s.originalHandler === e && s.delegationSelector === n) return s } return null }

    function I(t, e, n) { var i = "string" == typeof e,
            o = i ? n : e,
            r = t.replace(L, ""),
            s = A[r]; return s && (r = s), D.indexOf(r) > -1 || (r = t), [i, o, r] }

    function j(t, e, n, i, o) { if ("string" == typeof e && t) { n || (n = i, i = null); var r = I(e, n, i),
                s = r[0],
                a = r[1],
                l = r[2],
                c = x(t),
                f = c[l] || (c[l] = {}),
                u = N(f, a, s ? n : null); if (u) u.oneOff = u.oneOff && o;
            else { var h = S(a, e.replace(T, "")),
                    d = s ? function(t, e, n) { return function i(o) { for (var r = t.querySelectorAll(e), s = o.target; s && s !== this; s = s.parentNode)
                                for (var a = r.length; a--;)
                                    if (r[a] === s) return o.delegateTarget = s, i.oneOff && M.off(t, o.type, n), n.apply(s, [o]);
                            return null } }(t, n, i) : function(t, e) { return function n(i) { return i.delegateTarget = t, n.oneOff && M.off(t, i.type, e), e.apply(t, [i]) } }(t, n);
                d.delegationSelector = s ? n : null, d.originalHandler = a, d.oneOff = o, d.uidEvent = h, f[h] = d, t.addEventListener(l, d, s) } } }

    function P(t, e, n, i, o) { var r = N(e[n], i, o);
        r && (t.removeEventListener(n, r, Boolean(o)), delete e[n][r.uidEvent]) } var M = { on: function(t, e, n, i) { j(t, e, n, i, !1) }, one: function(t, e, n, i) { j(t, e, n, i, !0) }, off: function(t, e, n, i) { if ("string" == typeof e && t) { var o = I(e, n, i),
                        r = o[0],
                        s = o[1],
                        a = o[2],
                        l = a !== e,
                        c = x(t),
                        f = "." === e.charAt(0); if (void 0 === s) { f && Object.keys(c).forEach((function(n) {! function(t, e, n, i) { var o = e[n] || {};
                                Object.keys(o).forEach((function(r) { if (r.indexOf(i) > -1) { var s = o[r];
                                        P(t, e, n, s.originalHandler, s.delegationSelector) } })) }(t, c, n, e.slice(1)) })); var u = c[a] || {};
                        Object.keys(u).forEach((function(n) { var i = n.replace(k, ""); if (!l || e.indexOf(i) > -1) { var o = u[n];
                                P(t, c, a, o.originalHandler, o.delegationSelector) } })) } else { if (!c || !c[a]) return;
                        P(t, c, a, s, r ? n : null) } } }, trigger: function(t, e, n) { if ("string" != typeof e || !t) return null; var i, o = v(),
                    r = e.replace(L, ""),
                    s = e !== r,
                    a = D.indexOf(r) > -1,
                    l = !0,
                    c = !0,
                    f = !1,
                    u = null; return s && o && (i = o.Event(e, n), o(t).trigger(i), l = !i.isPropagationStopped(), c = !i.isImmediatePropagationStopped(), f = i.isDefaultPrevented()), a ? (u = document.createEvent("HTMLEvents")).initEvent(r, l, !0) : u = new CustomEvent(e, { bubbles: l, cancelable: !0 }), void 0 !== n && Object.keys(n).forEach((function(t) { Object.defineProperty(u, t, { get: function() { return n[t] } }) })), f && u.preventDefault(), c && t.dispatchEvent(u), u.defaultPrevented && void 0 !== i && i.preventDefault(), u } },
        H = "alert",
        R = function() {
            function t(t) { this._element = t, this._element && y(t, "bs.alert", this) } var n = t.prototype; return n.close = function(t) { var e = t ? this._getRootElement(t) : this._element,
                    n = this._triggerCloseEvent(e);
                null === n || n.defaultPrevented || this._removeElement(e) }, n.dispose = function() { E(this._element, "bs.alert"), this._element = null }, n._getRootElement = function(t) { return l(t) || t.closest(".alert") }, n._triggerCloseEvent = function(t) { return M.trigger(t, "close.bs.alert") }, n._removeElement = function(t) { var e = this; if (t.classList.remove("show"), t.classList.contains("fade")) { var n = c(t);
                    M.one(t, "transitionend", (function() { return e._destroyElement(t) })), h(t, n) } else this._destroyElement(t) }, n._destroyElement = function(t) { t.parentNode && t.parentNode.removeChild(t), M.trigger(t, "closed.bs.alert") }, t.jQueryInterface = function(e) { return this.each((function() { var n = w(this, "bs.alert");
                    n || (n = new t(this)), "close" === e && n[e](this) })) }, t.handleDismiss = function(t) { return function(e) { e && e.preventDefault(), t.close(this) } }, t.getInstance = function(t) { return w(t, "bs.alert") }, e(t, null, [{ key: "VERSION", get: function() { return "5.0.0-alpha3" } }]), t }();
    M.on(document, "click.bs.alert.data-api", '[data-dismiss="alert"]', R.handleDismiss(new R)), _((function() { var t = v(); if (t) { var e = t.fn[H];
            t.fn[H] = R.jQueryInterface, t.fn[H].Constructor = R, t.fn[H].noConflict = function() { return t.fn[H] = e, R.jQueryInterface } } })); var B = function() {
        function t(t) { this._element = t, y(t, "bs.button", this) } var n = t.prototype; return n.toggle = function() { this._element.setAttribute("aria-pressed", this._element.classList.toggle("active")) }, n.dispose = function() { E(this._element, "bs.button"), this._element = null }, t.jQueryInterface = function(e) { return this.each((function() { var n = w(this, "bs.button");
                n || (n = new t(this)), "toggle" === e && n[e]() })) }, t.getInstance = function(t) { return w(t, "bs.button") }, e(t, null, [{ key: "VERSION", get: function() { return "5.0.0-alpha3" } }]), t }();

    function F(t) { return "true" === t || "false" !== t && (t === Number(t).toString() ? Number(t) : "" === t || "null" === t ? null : t) }

    function W(t) { return t.replace(/[A-Z]/g, (function(t) { return "-" + t.toLowerCase() })) }
    M.on(document, "click.bs.button.data-api", '[data-toggle="button"]', (function(t) { t.preventDefault(); var e = t.target.closest('[data-toggle="button"]'),
            n = w(e, "bs.button");
        n || (n = new B(e)), n.toggle() })), _((function() { var t = v(); if (t) { var e = t.fn.button;
            t.fn.button = B.jQueryInterface, t.fn.button.Constructor = B, t.fn.button.noConflict = function() { return t.fn.button = e, B.jQueryInterface } } })); var U = { setDataAttribute: function(t, e, n) { t.setAttribute("data-" + W(e), n) }, removeDataAttribute: function(t, e) { t.removeAttribute("data-" + W(e)) }, getDataAttributes: function(t) { if (!t) return {}; var e = n({}, t.dataset); return Object.keys(e).forEach((function(t) { e[t] = F(e[t]) })), e }, getDataAttribute: function(t, e) { return F(t.getAttribute("data-" + W(e))) }, offset: function(t) { var e = t.getBoundingClientRect(); return { top: e.top + document.body.scrollTop, left: e.left + document.body.scrollLeft } }, position: function(t) { return { top: t.offsetTop, left: t.offsetLeft } } },
        Q = { matches: function(t, e) { return t.matches(e) }, find: function(t, e) { var n; return void 0 === e && (e = document.documentElement), (n = []).concat.apply(n, Element.prototype.querySelectorAll.call(e, t)) }, findOne: function(t, e) { return void 0 === e && (e = document.documentElement), Element.prototype.querySelector.call(e, t) }, children: function(t, e) { var n, i = (n = []).concat.apply(n, t.children); return i.filter((function(t) { return t.matches(e) })) }, parents: function(t, e) { for (var n = [], i = t.parentNode; i && i.nodeType === Node.ELEMENT_NODE && 3 !== i.nodeType;) this.matches(i, e) && n.push(i), i = i.parentNode; return n }, prev: function(t, e) { for (var n = t.previousElementSibling; n;) { if (n.matches(e)) return [n];
                    n = n.previousElementSibling } return [] }, next: function(t, e) { for (var n = t.nextElementSibling; n;) { if (this.matches(n, e)) return [n];
                    n = n.nextElementSibling } return [] } },
        V = "carousel",
        K = ".bs.carousel",
        Y = { interval: 5e3, keyboard: !0, slide: !1, pause: "hover", wrap: !0, touch: !0 },
        z = { interval: "(number|boolean)", keyboard: "boolean", slide: "(boolean|string)", pause: "(string|boolean)", wrap: "boolean", touch: "boolean" },
        q = { TOUCH: "touch", PEN: "pen" },
        X = function() {
            function t(t, e) { this._items = null, this._interval = null, this._activeElement = null, this._isPaused = !1, this._isSliding = !1, this.touchTimeout = null, this.touchStartX = 0, this.touchDeltaX = 0, this._config = this._getConfig(e), this._element = t, this._indicatorsElement = Q.findOne(".carousel-indicators", this._element), this._touchSupported = "ontouchstart" in document.documentElement || navigator.maxTouchPoints > 0, this._pointerEvent = Boolean(window.PointerEvent), this._addEventListeners(), y(t, "bs.carousel", this) } var i = t.prototype; return i.next = function() { this._isSliding || this._slide("next") }, i.nextWhenVisible = function() {!document.hidden && p(this._element) && this.next() }, i.prev = function() { this._isSliding || this._slide("prev") }, i.pause = function(t) { t || (this._isPaused = !0), Q.findOne(".carousel-item-next, .carousel-item-prev", this._element) && (f(this._element), this.cycle(!0)), clearInterval(this._interval), this._interval = null }, i.cycle = function(t) { t || (this._isPaused = !1), this._interval && (clearInterval(this._interval), this._interval = null), this._config && this._config.interval && !this._isPaused && (this._updateInterval(), this._interval = setInterval((document.visibilityState ? this.nextWhenVisible : this.next).bind(this), this._config.interval)) }, i.to = function(t) { var e = this;
                this._activeElement = Q.findOne(".active.carousel-item", this._element); var n = this._getItemIndex(this._activeElement); if (!(t > this._items.length - 1 || t < 0))
                    if (this._isSliding) M.one(this._element, "slid.bs.carousel", (function() { return e.to(t) }));
                    else { if (n === t) return this.pause(), void this.cycle(); var i = t > n ? "next" : "prev";
                        this._slide(i, this._items[t]) } }, i.dispose = function() { M.off(this._element, K), E(this._element, "bs.carousel"), this._items = null, this._config = null, this._element = null, this._interval = null, this._isPaused = null, this._isSliding = null, this._activeElement = null, this._indicatorsElement = null }, i._getConfig = function(t) { return t = n({}, Y, t), d(V, t, z), t }, i._handleSwipe = function() { var t = Math.abs(this.touchDeltaX); if (!(t <= 40)) { var e = t / this.touchDeltaX;
                    this.touchDeltaX = 0, e > 0 && this.prev(), e < 0 && this.next() } }, i._addEventListeners = function() { var t = this;
                this._config.keyboard && M.on(this._element, "keydown.bs.carousel", (function(e) { return t._keydown(e) })), "hover" === this._config.pause && (M.on(this._element, "mouseenter.bs.carousel", (function(e) { return t.pause(e) })), M.on(this._element, "mouseleave.bs.carousel", (function(e) { return t.cycle(e) }))), this._config.touch && this._touchSupported && this._addTouchEventListeners() }, i._addTouchEventListeners = function() { var t = this,
                    e = function(e) { t._pointerEvent && q[e.pointerType.toUpperCase()] ? t.touchStartX = e.clientX : t._pointerEvent || (t.touchStartX = e.touches[0].clientX) },
                    n = function(e) { t._pointerEvent && q[e.pointerType.toUpperCase()] && (t.touchDeltaX = e.clientX - t.touchStartX), t._handleSwipe(), "hover" === t._config.pause && (t.pause(), t.touchTimeout && clearTimeout(t.touchTimeout), t.touchTimeout = setTimeout((function(e) { return t.cycle(e) }), 500 + t._config.interval)) };
                Q.find(".carousel-item img", this._element).forEach((function(t) { M.on(t, "dragstart.bs.carousel", (function(t) { return t.preventDefault() })) })), this._pointerEvent ? (M.on(this._element, "pointerdown.bs.carousel", (function(t) { return e(t) })), M.on(this._element, "pointerup.bs.carousel", (function(t) { return n(t) })), this._element.classList.add("pointer-event")) : (M.on(this._element, "touchstart.bs.carousel", (function(t) { return e(t) })), M.on(this._element, "touchmove.bs.carousel", (function(e) { return function(e) { e.touches && e.touches.length > 1 ? t.touchDeltaX = 0 : t.touchDeltaX = e.touches[0].clientX - t.touchStartX }(e) })), M.on(this._element, "touchend.bs.carousel", (function(t) { return n(t) }))) }, i._keydown = function(t) { if (!/input|textarea/i.test(t.target.tagName)) switch (t.key) {
                    case "ArrowLeft":
                        t.preventDefault(), this.prev(); break;
                    case "ArrowRight":
                        t.preventDefault(), this.next() } }, i._getItemIndex = function(t) { return this._items = t && t.parentNode ? Q.find(".carousel-item", t.parentNode) : [], this._items.indexOf(t) }, i._getItemByDirection = function(t, e) { var n = "next" === t,
                    i = "prev" === t,
                    o = this._getItemIndex(e),
                    r = this._items.length - 1; if ((i && 0 === o || n && o === r) && !this._config.wrap) return e; var s = (o + ("prev" === t ? -1 : 1)) % this._items.length; return -1 === s ? this._items[this._items.length - 1] : this._items[s] }, i._triggerSlideEvent = function(t, e) { var n = this._getItemIndex(t),
                    i = this._getItemIndex(Q.findOne(".active.carousel-item", this._element)); return M.trigger(this._element, "slide.bs.carousel", { relatedTarget: t, direction: e, from: i, to: n }) }, i._setActiveIndicatorElement = function(t) { if (this._indicatorsElement) { for (var e = Q.find(".active", this._indicatorsElement), n = 0; n < e.length; n++) e[n].classList.remove("active"); var i = this._indicatorsElement.children[this._getItemIndex(t)];
                    i && i.classList.add("active") } }, i._updateInterval = function() { var t = this._activeElement || Q.findOne(".active.carousel-item", this._element); if (t) { var e = parseInt(t.getAttribute("data-interval"), 10);
                    e ? (this._config.defaultInterval = this._config.defaultInterval || this._config.interval, this._config.interval = e) : this._config.interval = this._config.defaultInterval || this._config.interval } }, i._slide = function(t, e) { var n, i, o, r = this,
                    s = Q.findOne(".active.carousel-item", this._element),
                    a = this._getItemIndex(s),
                    l = e || s && this._getItemByDirection(t, s),
                    f = this._getItemIndex(l),
                    u = Boolean(this._interval); if ("next" === t ? (n = "carousel-item-left", i = "carousel-item-next", o = "left") : (n = "carousel-item-right", i = "carousel-item-prev", o = "right"), l && l.classList.contains("active")) this._isSliding = !1;
                else if (!this._triggerSlideEvent(l, o).defaultPrevented && s && l) { if (this._isSliding = !0, u && this.pause(), this._setActiveIndicatorElement(l), this._activeElement = l, this._element.classList.contains("slide")) { l.classList.add(i), m(l), s.classList.add(n), l.classList.add(n); var d = c(s);
                        M.one(s, "transitionend", (function() { l.classList.remove(n, i), l.classList.add("active"), s.classList.remove("active", i, n), r._isSliding = !1, setTimeout((function() { M.trigger(r._element, "slid.bs.carousel", { relatedTarget: l, direction: o, from: a, to: f }) }), 0) })), h(s, d) } else s.classList.remove("active"), l.classList.add("active"), this._isSliding = !1, M.trigger(this._element, "slid.bs.carousel", { relatedTarget: l, direction: o, from: a, to: f });
                    u && this.cycle() } }, t.carouselInterface = function(e, i) { var o = w(e, "bs.carousel"),
                    r = n({}, Y, U.getDataAttributes(e)); "object" == typeof i && (r = n({}, r, i)); var s = "string" == typeof i ? i : r.slide; if (o || (o = new t(e, r)), "number" == typeof i) o.to(i);
                else if ("string" == typeof s) { if (void 0 === o[s]) throw new TypeError('No method named "' + s + '"');
                    o[s]() } else r.interval && r.ride && (o.pause(), o.cycle()) }, t.jQueryInterface = function(e) { return this.each((function() { t.carouselInterface(this, e) })) }, t.dataApiClickHandler = function(e) { var i = l(this); if (i && i.classList.contains("carousel")) { var o = n({}, U.getDataAttributes(i), U.getDataAttributes(this)),
                        r = this.getAttribute("data-slide-to");
                    r && (o.interval = !1), t.carouselInterface(i, o), r && w(i, "bs.carousel").to(r), e.preventDefault() } }, t.getInstance = function(t) { return w(t, "bs.carousel") }, e(t, null, [{ key: "VERSION", get: function() { return "5.0.0-alpha3" } }, { key: "Default", get: function() { return Y } }]), t }();
    M.on(document, "click.bs.carousel.data-api", "[data-slide], [data-slide-to]", X.dataApiClickHandler), M.on(window, "load.bs.carousel.data-api", (function() { for (var t = Q.find('[data-ride="carousel"]'), e = 0, n = t.length; e < n; e++) X.carouselInterface(t[e], w(t[e], "bs.carousel")) })), _((function() { var t = v(); if (t) { var e = t.fn[V];
            t.fn[V] = X.jQueryInterface, t.fn[V].Constructor = X, t.fn[V].noConflict = function() { return t.fn[V] = e, X.jQueryInterface } } })); var G = "collapse",
        $ = { toggle: !0, parent: "" },
        Z = { toggle: "boolean", parent: "(string|element)" },
        J = function() {
            function t(t, e) { this._isTransitioning = !1, this._element = t, this._config = this._getConfig(e), this._triggerArray = Q.find('[data-toggle="collapse"][href="#' + t.id + '"],[data-toggle="collapse"][data-target="#' + t.id + '"]'); for (var n = Q.find('[data-toggle="collapse"]'), i = 0, o = n.length; i < o; i++) { var r = n[i],
                        s = a(r),
                        l = Q.find(s).filter((function(e) { return e === t }));
                    null !== s && l.length && (this._selector = s, this._triggerArray.push(r)) }
                this._parent = this._config.parent ? this._getParent() : null, this._config.parent || this._addAriaAndCollapsedClass(this._element, this._triggerArray), this._config.toggle && this.toggle(), y(t, "bs.collapse", this) } var i = t.prototype; return i.toggle = function() { this._element.classList.contains("show") ? this.hide() : this.show() }, i.show = function() { var e = this; if (!this._isTransitioning && !this._element.classList.contains("show")) { var n, i;
                    this._parent && 0 === (n = Q.find(".show, .collapsing", this._parent).filter((function(t) { return "string" == typeof e._config.parent ? t.getAttribute("data-parent") === e._config.parent : t.classList.contains("collapse") }))).length && (n = null); var o = Q.findOne(this._selector); if (n) { var r = n.filter((function(t) { return o !== t })); if ((i = r[0] ? w(r[0], "bs.collapse") : null) && i._isTransitioning) return } if (!M.trigger(this._element, "show.bs.collapse").defaultPrevented) { n && n.forEach((function(e) { o !== e && t.collapseInterface(e, "hide"), i || y(e, "bs.collapse", null) })); var s = this._getDimension();
                        this._element.classList.remove("collapse"), this._element.classList.add("collapsing"), this._element.style[s] = 0, this._triggerArray.length && this._triggerArray.forEach((function(t) { t.classList.remove("collapsed"), t.setAttribute("aria-expanded", !0) })), this.setTransitioning(!0); var a = "scroll" + (s[0].toUpperCase() + s.slice(1)),
                            l = c(this._element);
                        M.one(this._element, "transitionend", (function() { e._element.classList.remove("collapsing"), e._element.classList.add("collapse", "show"), e._element.style[s] = "", e.setTransitioning(!1), M.trigger(e._element, "shown.bs.collapse") })), h(this._element, l), this._element.style[s] = this._element[a] + "px" } } }, i.hide = function() { var t = this; if (!this._isTransitioning && this._element.classList.contains("show") && !M.trigger(this._element, "hide.bs.collapse").defaultPrevented) { var e = this._getDimension();
                    this._element.style[e] = this._element.getBoundingClientRect()[e] + "px", m(this._element), this._element.classList.add("collapsing"), this._element.classList.remove("collapse", "show"); var n = this._triggerArray.length; if (n > 0)
                        for (var i = 0; i < n; i++) { var o = this._triggerArray[i],
                                r = l(o);
                            r && !r.classList.contains("show") && (o.classList.add("collapsed"), o.setAttribute("aria-expanded", !1)) }
                    this.setTransitioning(!0);
                    this._element.style[e] = ""; var s = c(this._element);
                    M.one(this._element, "transitionend", (function() { t.setTransitioning(!1), t._element.classList.remove("collapsing"), t._element.classList.add("collapse"), M.trigger(t._element, "hidden.bs.collapse") })), h(this._element, s) } }, i.setTransitioning = function(t) { this._isTransitioning = t }, i.dispose = function() { E(this._element, "bs.collapse"), this._config = null, this._parent = null, this._element = null, this._triggerArray = null, this._isTransitioning = null }, i._getConfig = function(t) { return (t = n({}, $, t)).toggle = Boolean(t.toggle), d(G, t, Z), t }, i._getDimension = function() { return this._element.classList.contains("width") ? "width" : "height" }, i._getParent = function() { var t = this,
                    e = this._config.parent;
                u(e) ? void 0 === e.jquery && void 0 === e[0] || (e = e[0]) : e = Q.findOne(e); var n = '[data-toggle="collapse"][data-parent="' + e + '"]'; return Q.find(n, e).forEach((function(e) { var n = l(e);
                    t._addAriaAndCollapsedClass(n, [e]) })), e }, i._addAriaAndCollapsedClass = function(t, e) { if (t && e.length) { var n = t.classList.contains("show");
                    e.forEach((function(t) { n ? t.classList.remove("collapsed") : t.classList.add("collapsed"), t.setAttribute("aria-expanded", n) })) } }, t.collapseInterface = function(e, i) { var o = w(e, "bs.collapse"),
                    r = n({}, $, U.getDataAttributes(e), "object" == typeof i && i ? i : {}); if (!o && r.toggle && "string" == typeof i && /show|hide/.test(i) && (r.toggle = !1), o || (o = new t(e, r)), "string" == typeof i) { if (void 0 === o[i]) throw new TypeError('No method named "' + i + '"');
                    o[i]() } }, t.jQueryInterface = function(e) { return this.each((function() { t.collapseInterface(this, e) })) }, t.getInstance = function(t) { return w(t, "bs.collapse") }, e(t, null, [{ key: "VERSION", get: function() { return "5.0.0-alpha3" } }, { key: "Default", get: function() { return $ } }]), t }();
    M.on(document, "click.bs.collapse.data-api", '[data-toggle="collapse"]', (function(t) { "A" === t.target.tagName && t.preventDefault(); var e = U.getDataAttributes(this),
            n = a(this);
        Q.find(n).forEach((function(t) { var n, i = w(t, "bs.collapse");
            i ? (null === i._parent && "string" == typeof e.parent && (i._config.parent = e.parent, i._parent = i._getParent()), n = "toggle") : n = e, J.collapseInterface(t, n) })) })), _((function() { var t = v(); if (t) { var e = t.fn[G];
            t.fn[G] = J.jQueryInterface, t.fn[G].Constructor = J, t.fn[G].noConflict = function() { return t.fn[G] = e, J.jQueryInterface } } })); var tt = "undefined" != typeof window && "undefined" != typeof document && "undefined" != typeof navigator,
        et = function() { for (var t = ["Edge", "Trident", "Firefox"], e = 0; e < t.length; e += 1)
                if (tt && navigator.userAgent.indexOf(t[e]) >= 0) return 1;
            return 0 }(); var nt = tt && window.Promise ? function(t) { var e = !1; return function() { e || (e = !0, window.Promise.resolve().then((function() { e = !1, t() }))) } } : function(t) { var e = !1; return function() { e || (e = !0, setTimeout((function() { e = !1, t() }), et)) } };

    function it(t) { return t && "[object Function]" === {}.toString.call(t) }

    function ot(t, e) { if (1 !== t.nodeType) return []; var n = t.ownerDocument.defaultView.getComputedStyle(t, null); return e ? n[e] : n }

    function rt(t) { return "HTML" === t.nodeName ? t : t.parentNode || t.host }

    function st(t) { if (!t) return document.body; switch (t.nodeName) {
            case "HTML":
            case "BODY":
                return t.ownerDocument.body;
            case "#document":
                return t.body } var e = ot(t),
            n = e.overflow,
            i = e.overflowX,
            o = e.overflowY; return /(auto|scroll|overlay)/.test(n + o + i) ? t : st(rt(t)) }

    function at(t) { return t && t.referenceNode ? t.referenceNode : t } var lt = tt && !(!window.MSInputMethodContext || !document.documentMode),
        ct = tt && /MSIE 10/.test(navigator.userAgent);

    function ft(t) { return 11 === t ? lt : 10 === t ? ct : lt || ct }

    function ut(t) { if (!t) return document.documentElement; for (var e = ft(10) ? document.body : null, n = t.offsetParent || null; n === e && t.nextElementSibling;) n = (t = t.nextElementSibling).offsetParent; var i = n && n.nodeName; return i && "BODY" !== i && "HTML" !== i ? -1 !== ["TH", "TD", "TABLE"].indexOf(n.nodeName) && "static" === ot(n, "position") ? ut(n) : n : t ? t.ownerDocument.documentElement : document.documentElement }

    function ht(t) { return null !== t.parentNode ? ht(t.parentNode) : t }

    function dt(t, e) { if (!(t && t.nodeType && e && e.nodeType)) return document.documentElement; var n = t.compareDocumentPosition(e) & Node.DOCUMENT_POSITION_FOLLOWING,
            i = n ? t : e,
            o = n ? e : t,
            r = document.createRange();
        r.setStart(i, 0), r.setEnd(o, 0); var s, a, l = r.commonAncestorContainer; if (t !== l && e !== l || i.contains(o)) return "BODY" === (a = (s = l).nodeName) || "HTML" !== a && ut(s.firstElementChild) !== s ? ut(l) : l; var c = ht(t); return c.host ? dt(c.host, e) : dt(t, ht(e).host) }

    function pt(t) { var e = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "top",
            n = "top" === e ? "scrollTop" : "scrollLeft",
            i = t.nodeName; if ("BODY" === i || "HTML" === i) { var o = t.ownerDocument.documentElement,
                r = t.ownerDocument.scrollingElement || o; return r[n] } return t[n] }

    function gt(t, e) { var n = arguments.length > 2 && void 0 !== arguments[2] && arguments[2],
            i = pt(e, "top"),
            o = pt(e, "left"),
            r = n ? -1 : 1; return t.top += i * r, t.bottom += i * r, t.left += o * r, t.right += o * r, t }

    function mt(t, e) { var n = "x" === e ? "Left" : "Top",
            i = "Left" === n ? "Right" : "Bottom"; return parseFloat(t["border" + n + "Width"]) + parseFloat(t["border" + i + "Width"]) }

    function vt(t, e, n, i) { return Math.max(e["offset" + t], e["scroll" + t], n["client" + t], n["offset" + t], n["scroll" + t], ft(10) ? parseInt(n["offset" + t]) + parseInt(i["margin" + ("Height" === t ? "Top" : "Left")]) + parseInt(i["margin" + ("Height" === t ? "Bottom" : "Right")]) : 0) }

    function _t(t) { var e = t.body,
            n = t.documentElement,
            i = ft(10) && getComputedStyle(n); return { height: vt("Height", e, n, i), width: vt("Width", e, n, i) } } var bt = function(t, e) { if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function") },
        yt = function() {
            function t(t, e) { for (var n = 0; n < e.length; n++) { var i = e[n];
                    i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(t, i.key, i) } } return function(e, n, i) { return n && t(e.prototype, n), i && t(e, i), e } }(),
        wt = function(t, e, n) { return e in t ? Object.defineProperty(t, e, { value: n, enumerable: !0, configurable: !0, writable: !0 }) : t[e] = n, t },
        Et = Object.assign || function(t) { for (var e = 1; e < arguments.length; e++) { var n = arguments[e]; for (var i in n) Object.prototype.hasOwnProperty.call(n, i) && (t[i] = n[i]) } return t };

    function Tt(t) { return Et({}, t, { right: t.left + t.width, bottom: t.top + t.height }) }

    function Lt(t) { var e = {}; try { if (ft(10)) { e = t.getBoundingClientRect(); var n = pt(t, "top"),
                    i = pt(t, "left");
                e.top += n, e.left += i, e.bottom += n, e.right += i } else e = t.getBoundingClientRect() } catch (t) {} var o = { left: e.left, top: e.top, width: e.right - e.left, height: e.bottom - e.top },
            r = "HTML" === t.nodeName ? _t(t.ownerDocument) : {},
            s = r.width || t.clientWidth || o.width,
            a = r.height || t.clientHeight || o.height,
            l = t.offsetWidth - s,
            c = t.offsetHeight - a; if (l || c) { var f = ot(t);
            l -= mt(f, "x"), c -= mt(f, "y"), o.width -= l, o.height -= c } return Tt(o) }

    function kt(t, e) { var n = arguments.length > 2 && void 0 !== arguments[2] && arguments[2],
            i = ft(10),
            o = "HTML" === e.nodeName,
            r = Lt(t),
            s = Lt(e),
            a = st(t),
            l = ot(e),
            c = parseFloat(l.borderTopWidth),
            f = parseFloat(l.borderLeftWidth);
        n && o && (s.top = Math.max(s.top, 0), s.left = Math.max(s.left, 0)); var u = Tt({ top: r.top - s.top - c, left: r.left - s.left - f, width: r.width, height: r.height }); if (u.marginTop = 0, u.marginLeft = 0, !i && o) { var h = parseFloat(l.marginTop),
                d = parseFloat(l.marginLeft);
            u.top -= c - h, u.bottom -= c - h, u.left -= f - d, u.right -= f - d, u.marginTop = h, u.marginLeft = d } return (i && !n ? e.contains(a) : e === a && "BODY" !== a.nodeName) && (u = gt(u, e)), u }

    function Ct(t) { var e = arguments.length > 1 && void 0 !== arguments[1] && arguments[1],
            n = t.ownerDocument.documentElement,
            i = kt(t, n),
            o = Math.max(n.clientWidth, window.innerWidth || 0),
            r = Math.max(n.clientHeight, window.innerHeight || 0),
            s = e ? 0 : pt(n),
            a = e ? 0 : pt(n, "left"),
            l = { top: s - i.top + i.marginTop, left: a - i.left + i.marginLeft, width: o, height: r }; return Tt(l) }

    function Ot(t) { var e = t.nodeName; if ("BODY" === e || "HTML" === e) return !1; if ("fixed" === ot(t, "position")) return !0; var n = rt(t); return !!n && Ot(n) }

    function At(t) { if (!t || !t.parentElement || ft()) return document.documentElement; for (var e = t.parentElement; e && "none" === ot(e, "transform");) e = e.parentElement; return e || document.documentElement }

    function Dt(t, e, n, i) { var o = arguments.length > 4 && void 0 !== arguments[4] && arguments[4],
            r = { top: 0, left: 0 },
            s = o ? At(t) : dt(t, at(e)); if ("viewport" === i) r = Ct(s, o);
        else { var a = void 0; "scrollParent" === i ? "BODY" === (a = st(rt(e))).nodeName && (a = t.ownerDocument.documentElement) : a = "window" === i ? t.ownerDocument.documentElement : i; var l = kt(a, s, o); if ("HTML" !== a.nodeName || Ot(s)) r = l;
            else { var c = _t(t.ownerDocument),
                    f = c.height,
                    u = c.width;
                r.top += l.top - l.marginTop, r.bottom = f + l.top, r.left += l.left - l.marginLeft, r.right = u + l.left } } var h = "number" == typeof(n = n || 0); return r.left += h ? n : n.left || 0, r.top += h ? n : n.top || 0, r.right -= h ? n : n.right || 0, r.bottom -= h ? n : n.bottom || 0, r }

    function St(t) { return t.width * t.height }

    function xt(t, e, n, i, o) { var r = arguments.length > 5 && void 0 !== arguments[5] ? arguments[5] : 0; if (-1 === t.indexOf("auto")) return t; var s = Dt(n, i, r, o),
            a = { top: { width: s.width, height: e.top - s.top }, right: { width: s.right - e.right, height: s.height }, bottom: { width: s.width, height: s.bottom - e.bottom }, left: { width: e.left - s.left, height: s.height } },
            l = Object.keys(a).map((function(t) { return Et({ key: t }, a[t], { area: St(a[t]) }) })).sort((function(t, e) { return e.area - t.area })),
            c = l.filter((function(t) { var e = t.width,
                    i = t.height; return e >= n.clientWidth && i >= n.clientHeight })),
            f = c.length > 0 ? c[0].key : l[0].key,
            u = t.split("-")[1]; return f + (u ? "-" + u : "") }

    function Nt(t, e, n) { var i = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : null,
            o = i ? At(e) : dt(e, at(n)); return kt(n, o, i) }

    function It(t) { var e = t.ownerDocument.defaultView.getComputedStyle(t),
            n = parseFloat(e.marginTop || 0) + parseFloat(e.marginBottom || 0),
            i = parseFloat(e.marginLeft || 0) + parseFloat(e.marginRight || 0); return { width: t.offsetWidth + i, height: t.offsetHeight + n } }

    function jt(t) { var e = { left: "right", right: "left", bottom: "top", top: "bottom" }; return t.replace(/left|right|bottom|top/g, (function(t) { return e[t] })) }

    function Pt(t, e, n) { n = n.split("-")[0]; var i = It(t),
            o = { width: i.width, height: i.height },
            r = -1 !== ["right", "left"].indexOf(n),
            s = r ? "top" : "left",
            a = r ? "left" : "top",
            l = r ? "height" : "width",
            c = r ? "width" : "height"; return o[s] = e[s] + e[l] / 2 - i[l] / 2, o[a] = n === a ? e[a] - i[c] : e[jt(a)], o }

    function Mt(t, e) { return Array.prototype.find ? t.find(e) : t.filter(e)[0] }

    function Ht(t, e, n) { return (void 0 === n ? t : t.slice(0, function(t, e, n) { if (Array.prototype.findIndex) return t.findIndex((function(t) { return t[e] === n })); var i = Mt(t, (function(t) { return t[e] === n })); return t.indexOf(i) }(t, "name", n))).forEach((function(t) { t.function && console.warn("`modifier.function` is deprecated, use `modifier.fn`!"); var n = t.function || t.fn;
            t.enabled && it(n) && (e.offsets.popper = Tt(e.offsets.popper), e.offsets.reference = Tt(e.offsets.reference), e = n(e, t)) })), e }

    function Rt() { if (!this.state.isDestroyed) { var t = { instance: this, styles: {}, arrowStyles: {}, attributes: {}, flipped: !1, offsets: {} };
            t.offsets.reference = Nt(this.state, this.popper, this.reference, this.options.positionFixed), t.placement = xt(this.options.placement, t.offsets.reference, this.popper, this.reference, this.options.modifiers.flip.boundariesElement, this.options.modifiers.flip.padding), t.originalPlacement = t.placement, t.positionFixed = this.options.positionFixed, t.offsets.popper = Pt(this.popper, t.offsets.reference, t.placement), t.offsets.popper.position = this.options.positionFixed ? "fixed" : "absolute", t = Ht(this.modifiers, t), this.state.isCreated ? this.options.onUpdate(t) : (this.state.isCreated = !0, this.options.onCreate(t)) } }

    function Bt(t, e) { return t.some((function(t) { var n = t.name; return t.enabled && n === e })) }

    function Ft(t) { for (var e = [!1, "ms", "Webkit", "Moz", "O"], n = t.charAt(0).toUpperCase() + t.slice(1), i = 0; i < e.length; i++) { var o = e[i],
                r = o ? "" + o + n : t; if (void 0 !== document.body.style[r]) return r } return null }

    function Wt() { return this.state.isDestroyed = !0, Bt(this.modifiers, "applyStyle") && (this.popper.removeAttribute("x-placement"), this.popper.style.position = "", this.popper.style.top = "", this.popper.style.left = "", this.popper.style.right = "", this.popper.style.bottom = "", this.popper.style.willChange = "", this.popper.style[Ft("transform")] = ""), this.disableEventListeners(), this.options.removeOnDestroy && this.popper.parentNode.removeChild(this.popper), this }

    function Ut(t) { var e = t.ownerDocument; return e ? e.defaultView : window }

    function Qt(t, e, n, i) { n.updateBound = i, Ut(t).addEventListener("resize", n.updateBound, { passive: !0 }); var o = st(t); return function t(e, n, i, o) { var r = "BODY" === e.nodeName,
                s = r ? e.ownerDocument.defaultView : e;
            s.addEventListener(n, i, { passive: !0 }), r || t(st(s.parentNode), n, i, o), o.push(s) }(o, "scroll", n.updateBound, n.scrollParents), n.scrollElement = o, n.eventsEnabled = !0, n }

    function Vt() { this.state.eventsEnabled || (this.state = Qt(this.reference, this.options, this.state, this.scheduleUpdate)) }

    function Kt() { var t, e;
        this.state.eventsEnabled && (cancelAnimationFrame(this.scheduleUpdate), this.state = (t = this.reference, e = this.state, Ut(t).removeEventListener("resize", e.updateBound), e.scrollParents.forEach((function(t) { t.removeEventListener("scroll", e.updateBound) })), e.updateBound = null, e.scrollParents = [], e.scrollElement = null, e.eventsEnabled = !1, e)) }

    function Yt(t) { return "" !== t && !isNaN(parseFloat(t)) && isFinite(t) }

    function zt(t, e) { Object.keys(e).forEach((function(n) { var i = ""; - 1 !== ["width", "height", "top", "right", "bottom", "left"].indexOf(n) && Yt(e[n]) && (i = "px"), t.style[n] = e[n] + i })) } var qt = tt && /Firefox/i.test(navigator.userAgent);

    function Xt(t, e, n) { var i = Mt(t, (function(t) { return t.name === e })),
            o = !!i && t.some((function(t) { return t.name === n && t.enabled && t.order < i.order })); if (!o) { var r = "`" + e + "`",
                s = "`" + n + "`";
            console.warn(s + " modifier is required by " + r + " modifier in order to work, be sure to include it before " + r + "!") } return o } var Gt = ["auto-start", "auto", "auto-end", "top-start", "top", "top-end", "right-start", "right", "right-end", "bottom-end", "bottom", "bottom-start", "left-end", "left", "left-start"],
        $t = Gt.slice(3);

    function Zt(t) { var e = arguments.length > 1 && void 0 !== arguments[1] && arguments[1],
            n = $t.indexOf(t),
            i = $t.slice(n + 1).concat($t.slice(0, n)); return e ? i.reverse() : i } var Jt = "flip",
        te = "clockwise",
        ee = "counterclockwise";

    function ne(t, e, n, i) { var o = [0, 0],
            r = -1 !== ["right", "left"].indexOf(i),
            s = t.split(/(\+|\-)/).map((function(t) { return t.trim() })),
            a = s.indexOf(Mt(s, (function(t) { return -1 !== t.search(/,|\s/) })));
        s[a] && -1 === s[a].indexOf(",") && console.warn("Offsets separated by white space(s) are deprecated, use a comma (,) instead."); var l = /\s*,\s*|\s+/,
            c = -1 !== a ? [s.slice(0, a).concat([s[a].split(l)[0]]), [s[a].split(l)[1]].concat(s.slice(a + 1))] : [s]; return (c = c.map((function(t, i) { var o = (1 === i ? !r : r) ? "height" : "width",
                s = !1; return t.reduce((function(t, e) { return "" === t[t.length - 1] && -1 !== ["+", "-"].indexOf(e) ? (t[t.length - 1] = e, s = !0, t) : s ? (t[t.length - 1] += e, s = !1, t) : t.concat(e) }), []).map((function(t) { return function(t, e, n, i) { var o = t.match(/((?:\-|\+)?\d*\.?\d*)(.*)/),
                        r = +o[1],
                        s = o[2]; if (!r) return t; if (0 === s.indexOf("%")) { var a = void 0; switch (s) {
                            case "%p":
                                a = n; break;
                            case "%":
                            case "%r":
                            default:
                                a = i } return Tt(a)[e] / 100 * r } if ("vh" === s || "vw" === s) return ("vh" === s ? Math.max(document.documentElement.clientHeight, window.innerHeight || 0) : Math.max(document.documentElement.clientWidth, window.innerWidth || 0)) / 100 * r; return r }(t, o, e, n) })) }))).forEach((function(t, e) { t.forEach((function(n, i) { Yt(n) && (o[e] += n * ("-" === t[i - 1] ? -1 : 1)) })) })), o } var ie = { placement: "bottom", positionFixed: !1, eventsEnabled: !0, removeOnDestroy: !1, onCreate: function() {}, onUpdate: function() {}, modifiers: { shift: { order: 100, enabled: !0, fn: function(t) { var e = t.placement,
                            n = e.split("-")[0],
                            i = e.split("-")[1]; if (i) { var o = t.offsets,
                                r = o.reference,
                                s = o.popper,
                                a = -1 !== ["bottom", "top"].indexOf(n),
                                l = a ? "left" : "top",
                                c = a ? "width" : "height",
                                f = { start: wt({}, l, r[l]), end: wt({}, l, r[l] + r[c] - s[c]) };
                            t.offsets.popper = Et({}, s, f[i]) } return t } }, offset: { order: 200, enabled: !0, fn: function(t, e) { var n = e.offset,
                            i = t.placement,
                            o = t.offsets,
                            r = o.popper,
                            s = o.reference,
                            a = i.split("-")[0],
                            l = void 0; return l = Yt(+n) ? [+n, 0] : ne(n, r, s, a), "left" === a ? (r.top += l[0], r.left -= l[1]) : "right" === a ? (r.top += l[0], r.left += l[1]) : "top" === a ? (r.left += l[0], r.top -= l[1]) : "bottom" === a && (r.left += l[0], r.top += l[1]), t.popper = r, t }, offset: 0 }, preventOverflow: { order: 300, enabled: !0, fn: function(t, e) { var n = e.boundariesElement || ut(t.instance.popper);
                        t.instance.reference === n && (n = ut(n)); var i = Ft("transform"),
                            o = t.instance.popper.style,
                            r = o.top,
                            s = o.left,
                            a = o[i];
                        o.top = "", o.left = "", o[i] = ""; var l = Dt(t.instance.popper, t.instance.reference, e.padding, n, t.positionFixed);
                        o.top = r, o.left = s, o[i] = a, e.boundaries = l; var c = e.priority,
                            f = t.offsets.popper,
                            u = { primary: function(t) { var n = f[t]; return f[t] < l[t] && !e.escapeWithReference && (n = Math.max(f[t], l[t])), wt({}, t, n) }, secondary: function(t) { var n = "right" === t ? "left" : "top",
                                        i = f[n]; return f[t] > l[t] && !e.escapeWithReference && (i = Math.min(f[n], l[t] - ("right" === t ? f.width : f.height))), wt({}, n, i) } }; return c.forEach((function(t) { var e = -1 !== ["left", "top"].indexOf(t) ? "primary" : "secondary";
                            f = Et({}, f, u[e](t)) })), t.offsets.popper = f, t }, priority: ["left", "right", "top", "bottom"], padding: 5, boundariesElement: "scrollParent" }, keepTogether: { order: 400, enabled: !0, fn: function(t) { var e = t.offsets,
                            n = e.popper,
                            i = e.reference,
                            o = t.placement.split("-")[0],
                            r = Math.floor,
                            s = -1 !== ["top", "bottom"].indexOf(o),
                            a = s ? "right" : "bottom",
                            l = s ? "left" : "top",
                            c = s ? "width" : "height"; return n[a] < r(i[l]) && (t.offsets.popper[l] = r(i[l]) - n[c]), n[l] > r(i[a]) && (t.offsets.popper[l] = r(i[a])), t } }, arrow: { order: 500, enabled: !0, fn: function(t, e) { var n; if (!Xt(t.instance.modifiers, "arrow", "keepTogether")) return t; var i = e.element; if ("string" == typeof i) { if (!(i = t.instance.popper.querySelector(i))) return t } else if (!t.instance.popper.contains(i)) return console.warn("WARNING: `arrow.element` must be child of its popper element!"), t; var o = t.placement.split("-")[0],
                            r = t.offsets,
                            s = r.popper,
                            a = r.reference,
                            l = -1 !== ["left", "right"].indexOf(o),
                            c = l ? "height" : "width",
                            f = l ? "Top" : "Left",
                            u = f.toLowerCase(),
                            h = l ? "left" : "top",
                            d = l ? "bottom" : "right",
                            p = It(i)[c];
                        a[d] - p < s[u] && (t.offsets.popper[u] -= s[u] - (a[d] - p)), a[u] + p > s[d] && (t.offsets.popper[u] += a[u] + p - s[d]), t.offsets.popper = Tt(t.offsets.popper); var g = a[u] + a[c] / 2 - p / 2,
                            m = ot(t.instance.popper),
                            v = parseFloat(m["margin" + f]),
                            _ = parseFloat(m["border" + f + "Width"]),
                            b = g - t.offsets.popper[u] - v - _; return b = Math.max(Math.min(s[c] - p, b), 0), t.arrowElement = i, t.offsets.arrow = (wt(n = {}, u, Math.round(b)), wt(n, h, ""), n), t }, element: "[x-arrow]" }, flip: { order: 600, enabled: !0, fn: function(t, e) { if (Bt(t.instance.modifiers, "inner")) return t; if (t.flipped && t.placement === t.originalPlacement) return t; var n = Dt(t.instance.popper, t.instance.reference, e.padding, e.boundariesElement, t.positionFixed),
                            i = t.placement.split("-")[0],
                            o = jt(i),
                            r = t.placement.split("-")[1] || "",
                            s = []; switch (e.behavior) {
                            case Jt:
                                s = [i, o]; break;
                            case te:
                                s = Zt(i); break;
                            case ee:
                                s = Zt(i, !0); break;
                            default:
                                s = e.behavior } return s.forEach((function(a, l) { if (i !== a || s.length === l + 1) return t;
                            i = t.placement.split("-")[0], o = jt(i); var c = t.offsets.popper,
                                f = t.offsets.reference,
                                u = Math.floor,
                                h = "left" === i && u(c.right) > u(f.left) || "right" === i && u(c.left) < u(f.right) || "top" === i && u(c.bottom) > u(f.top) || "bottom" === i && u(c.top) < u(f.bottom),
                                d = u(c.left) < u(n.left),
                                p = u(c.right) > u(n.right),
                                g = u(c.top) < u(n.top),
                                m = u(c.bottom) > u(n.bottom),
                                v = "left" === i && d || "right" === i && p || "top" === i && g || "bottom" === i && m,
                                _ = -1 !== ["top", "bottom"].indexOf(i),
                                b = !!e.flipVariations && (_ && "start" === r && d || _ && "end" === r && p || !_ && "start" === r && g || !_ && "end" === r && m),
                                y = !!e.flipVariationsByContent && (_ && "start" === r && p || _ && "end" === r && d || !_ && "start" === r && m || !_ && "end" === r && g),
                                w = b || y;
                            (h || v || w) && (t.flipped = !0, (h || v) && (i = s[l + 1]), w && (r = function(t) { return "end" === t ? "start" : "start" === t ? "end" : t }(r)), t.placement = i + (r ? "-" + r : ""), t.offsets.popper = Et({}, t.offsets.popper, Pt(t.instance.popper, t.offsets.reference, t.placement)), t = Ht(t.instance.modifiers, t, "flip")) })), t }, behavior: "flip", padding: 5, boundariesElement: "viewport", flipVariations: !1, flipVariationsByContent: !1 }, inner: { order: 700, enabled: !1, fn: function(t) { var e = t.placement,
                            n = e.split("-")[0],
                            i = t.offsets,
                            o = i.popper,
                            r = i.reference,
                            s = -1 !== ["left", "right"].indexOf(n),
                            a = -1 === ["top", "left"].indexOf(n); return o[s ? "left" : "top"] = r[n] - (a ? o[s ? "width" : "height"] : 0), t.placement = jt(e), t.offsets.popper = Tt(o), t } }, hide: { order: 800, enabled: !0, fn: function(t) { if (!Xt(t.instance.modifiers, "hide", "preventOverflow")) return t; var e = t.offsets.reference,
                            n = Mt(t.instance.modifiers, (function(t) { return "preventOverflow" === t.name })).boundaries; if (e.bottom < n.top || e.left > n.right || e.top > n.bottom || e.right < n.left) { if (!0 === t.hide) return t;
                            t.hide = !0, t.attributes["x-out-of-boundaries"] = "" } else { if (!1 === t.hide) return t;
                            t.hide = !1, t.attributes["x-out-of-boundaries"] = !1 } return t } }, computeStyle: { order: 850, enabled: !0, fn: function(t, e) { var n = e.x,
                            i = e.y,
                            o = t.offsets.popper,
                            r = Mt(t.instance.modifiers, (function(t) { return "applyStyle" === t.name })).gpuAcceleration;
                        void 0 !== r && console.warn("WARNING: `gpuAcceleration` option moved to `computeStyle` modifier and will not be supported in future versions of Popper.js!"); var s = void 0 !== r ? r : e.gpuAcceleration,
                            a = ut(t.instance.popper),
                            l = Lt(a),
                            c = { position: o.position },
                            f = function(t, e) { var n = t.offsets,
                                    i = n.popper,
                                    o = n.reference,
                                    r = Math.round,
                                    s = Math.floor,
                                    a = function(t) { return t },
                                    l = r(o.width),
                                    c = r(i.width),
                                    f = -1 !== ["left", "right"].indexOf(t.placement),
                                    u = -1 !== t.placement.indexOf("-"),
                                    h = e ? f || u || l % 2 == c % 2 ? r : s : a,
                                    d = e ? r : a; return { left: h(l % 2 == 1 && c % 2 == 1 && !u && e ? i.left - 1 : i.left), top: d(i.top), bottom: d(i.bottom), right: h(i.right) } }(t, window.devicePixelRatio < 2 || !qt),
                            u = "bottom" === n ? "top" : "bottom",
                            h = "right" === i ? "left" : "right",
                            d = Ft("transform"),
                            p = void 0,
                            g = void 0; if (g = "bottom" === u ? "HTML" === a.nodeName ? -a.clientHeight + f.bottom : -l.height + f.bottom : f.top, p = "right" === h ? "HTML" === a.nodeName ? -a.clientWidth + f.right : -l.width + f.right : f.left, s && d) c[d] = "translate3d(" + p + "px, " + g + "px, 0)", c[u] = 0, c[h] = 0, c.willChange = "transform";
                        else { var m = "bottom" === u ? -1 : 1,
                                v = "right" === h ? -1 : 1;
                            c[u] = g * m, c[h] = p * v, c.willChange = u + ", " + h } var _ = { "x-placement": t.placement }; return t.attributes = Et({}, _, t.attributes), t.styles = Et({}, c, t.styles), t.arrowStyles = Et({}, t.offsets.arrow, t.arrowStyles), t }, gpuAcceleration: !0, x: "bottom", y: "right" }, applyStyle: { order: 900, enabled: !0, fn: function(t) { var e, n; return zt(t.instance.popper, t.styles), e = t.instance.popper, n = t.attributes, Object.keys(n).forEach((function(t) {!1 !== n[t] ? e.setAttribute(t, n[t]) : e.removeAttribute(t) })), t.arrowElement && Object.keys(t.arrowStyles).length && zt(t.arrowElement, t.arrowStyles), t }, onLoad: function(t, e, n, i, o) { var r = Nt(o, e, t, n.positionFixed),
                            s = xt(n.placement, r, e, t, n.modifiers.flip.boundariesElement, n.modifiers.flip.padding); return e.setAttribute("x-placement", s), zt(e, { position: n.positionFixed ? "fixed" : "absolute" }), n }, gpuAcceleration: void 0 } } },
        oe = function() {
            function t(e, n) { var i = this,
                    o = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {};
                bt(this, t), this.scheduleUpdate = function() { return requestAnimationFrame(i.update) }, this.update = nt(this.update.bind(this)), this.options = Et({}, t.Defaults, o), this.state = { isDestroyed: !1, isCreated: !1, scrollParents: [] }, this.reference = e && e.jquery ? e[0] : e, this.popper = n && n.jquery ? n[0] : n, this.options.modifiers = {}, Object.keys(Et({}, t.Defaults.modifiers, o.modifiers)).forEach((function(e) { i.options.modifiers[e] = Et({}, t.Defaults.modifiers[e] || {}, o.modifiers ? o.modifiers[e] : {}) })), this.modifiers = Object.keys(this.options.modifiers).map((function(t) { return Et({ name: t }, i.options.modifiers[t]) })).sort((function(t, e) { return t.order - e.order })), this.modifiers.forEach((function(t) { t.enabled && it(t.onLoad) && t.onLoad(i.reference, i.popper, i.options, t, i.state) })), this.update(); var r = this.options.eventsEnabled;
                r && this.enableEventListeners(), this.state.eventsEnabled = r } return yt(t, [{ key: "update", value: function() { return Rt.call(this) } }, { key: "destroy", value: function() { return Wt.call(this) } }, { key: "enableEventListeners", value: function() { return Vt.call(this) } }, { key: "disableEventListeners", value: function() { return Kt.call(this) } }]), t }();
    oe.Utils = ("undefined" != typeof window ? window : global).PopperUtils, oe.placements = Gt, oe.Defaults = ie; var re = "dropdown",
        se = new RegExp("ArrowUp|ArrowDown|Escape"),
        ae = { offset: 0, flip: !0, boundary: "scrollParent", reference: "toggle", display: "dynamic", popperConfig: null },
        le = { offset: "(number|string|function)", flip: "boolean", boundary: "(string|element)", reference: "(string|element)", display: "string", popperConfig: "(null|object)" },
        ce = function() {
            function t(t, e) { this._element = t, this._popper = null, this._config = this._getConfig(e), this._menu = this._getMenuElement(), this._inNavbar = this._detectNavbar(), this._addEventListeners(), y(t, "bs.dropdown", this) } var i = t.prototype; return i.toggle = function() { if (!this._element.disabled && !this._element.classList.contains("disabled")) { var e = this._element.classList.contains("show");
                    t.clearMenus(), e || this.show() } }, i.show = function() { if (!(this._element.disabled || this._element.classList.contains("disabled") || this._menu.classList.contains("show"))) { var e = t.getParentFromElement(this._element),
                        n = { relatedTarget: this._element }; if (!M.trigger(this._element, "show.bs.dropdown", n).defaultPrevented) { if (!this._inNavbar) { if (void 0 === oe) throw new TypeError("Bootstrap's dropdowns require Popper.js (https://popper.js.org)"); var i = this._element; "parent" === this._config.reference ? i = e : u(this._config.reference) && (i = this._config.reference, void 0 !== this._config.reference.jquery && (i = this._config.reference[0])), "scrollParent" !== this._config.boundary && e.classList.add("position-static"), this._popper = new oe(i, this._menu, this._getPopperConfig()) } var o; if ("ontouchstart" in document.documentElement && !e.closest(".navbar-nav"))(o = []).concat.apply(o, document.body.children).forEach((function(t) { return M.on(t, "mouseover", null, (function() {})) }));
                        this._element.focus(), this._element.setAttribute("aria-expanded", !0), this._menu.classList.toggle("show"), this._element.classList.toggle("show"), M.trigger(e, "shown.bs.dropdown", n) } } }, i.hide = function() { if (!this._element.disabled && !this._element.classList.contains("disabled") && this._menu.classList.contains("show")) { var e = t.getParentFromElement(this._element),
                        n = { relatedTarget: this._element };
                    M.trigger(e, "hide.bs.dropdown", n).defaultPrevented || (this._popper && this._popper.destroy(), this._menu.classList.toggle("show"), this._element.classList.toggle("show"), M.trigger(e, "hidden.bs.dropdown", n)) } }, i.dispose = function() { E(this._element, "bs.dropdown"), M.off(this._element, ".bs.dropdown"), this._element = null, this._menu = null, this._popper && (this._popper.destroy(), this._popper = null) }, i.update = function() { this._inNavbar = this._detectNavbar(), this._popper && this._popper.scheduleUpdate() }, i._addEventListeners = function() { var t = this;
                M.on(this._element, "click.bs.dropdown", (function(e) { e.preventDefault(), e.stopPropagation(), t.toggle() })) }, i._getConfig = function(t) { return t = n({}, this.constructor.Default, U.getDataAttributes(this._element), t), d(re, t, this.constructor.DefaultType), t }, i._getMenuElement = function() { return Q.next(this._element, ".dropdown-menu")[0] }, i._getPlacement = function() { var t = this._element.parentNode,
                    e = "bottom-start"; return t.classList.contains("dropup") ? e = this._menu.classList.contains("dropdown-menu-right") ? "top-end" : "top-start" : t.classList.contains("dropright") ? e = "right-start" : t.classList.contains("dropleft") ? e = "left-start" : this._menu.classList.contains("dropdown-menu-right") && (e = "bottom-end"), e }, i._detectNavbar = function() { return Boolean(this._element.closest(".navbar")) }, i._getOffset = function() { var t = this,
                    e = {}; return "function" == typeof this._config.offset ? e.fn = function(e) { return e.offsets = n({}, e.offsets, t._config.offset(e.offsets, t._element) || {}), e } : e.offset = this._config.offset, e }, i._getPopperConfig = function() { var t = { placement: this._getPlacement(), modifiers: { offset: this._getOffset(), flip: { enabled: this._config.flip }, preventOverflow: { boundariesElement: this._config.boundary } } }; return "static" === this._config.display && (t.modifiers.applyStyle = { enabled: !1 }), n({}, t, this._config.popperConfig) }, t.dropdownInterface = function(e, n) { var i = w(e, "bs.dropdown"); if (i || (i = new t(e, "object" == typeof n ? n : null)), "string" == typeof n) { if (void 0 === i[n]) throw new TypeError('No method named "' + n + '"');
                    i[n]() } }, t.jQueryInterface = function(e) { return this.each((function() { t.dropdownInterface(this, e) })) }, t.clearMenus = function(e) { if (!e || 2 !== e.button && ("keyup" !== e.type || "Tab" === e.key))
                    for (var n = Q.find('[data-toggle="dropdown"]'), i = 0, o = n.length; i < o; i++) { var r = t.getParentFromElement(n[i]),
                            s = w(n[i], "bs.dropdown"),
                            a = { relatedTarget: n[i] }; if (e && "click" === e.type && (a.clickEvent = e), s) { var l = s._menu; if (n[i].classList.contains("show"))
                                if (!(e && ("click" === e.type && /input|textarea/i.test(e.target.tagName) || "keyup" === e.type && "Tab" === e.key) && l.contains(e.target)))
                                    if (!M.trigger(r, "hide.bs.dropdown", a).defaultPrevented) { var c; if ("ontouchstart" in document.documentElement)(c = []).concat.apply(c, document.body.children).forEach((function(t) { return M.off(t, "mouseover", null, (function() {})) }));
                                        n[i].setAttribute("aria-expanded", "false"), s._popper && s._popper.destroy(), l.classList.remove("show"), n[i].classList.remove("show"), M.trigger(r, "hidden.bs.dropdown", a) } } } }, t.getParentFromElement = function(t) { return l(t) || t.parentNode }, t.dataApiKeydownHandler = function(e) { if (!(/input|textarea/i.test(e.target.tagName) ? "Space" === e.key || "Escape" !== e.key && ("ArrowDown" !== e.key && "ArrowUp" !== e.key || e.target.closest(".dropdown-menu")) : !se.test(e.key)) && (e.preventDefault(), e.stopPropagation(), !this.disabled && !this.classList.contains("disabled"))) { var n = t.getParentFromElement(this),
                        i = this.classList.contains("show"); if ("Escape" === e.key) return (this.matches('[data-toggle="dropdown"]') ? this : Q.prev(this, '[data-toggle="dropdown"]')[0]).focus(), void t.clearMenus(); if (i && "Space" !== e.key) { var o = Q.find(".dropdown-menu .dropdown-item:not(.disabled):not(:disabled)", n).filter(p); if (o.length) { var r = o.indexOf(e.target); "ArrowUp" === e.key && r > 0 && r--, "ArrowDown" === e.key && r < o.length - 1 && r++, o[r = -1 === r ? 0 : r].focus() } } else t.clearMenus() } }, t.getInstance = function(t) { return w(t, "bs.dropdown") }, e(t, null, [{ key: "VERSION", get: function() { return "5.0.0-alpha3" } }, { key: "Default", get: function() { return ae } }, { key: "DefaultType", get: function() { return le } }]), t }();
    M.on(document, "keydown.bs.dropdown.data-api", '[data-toggle="dropdown"]', ce.dataApiKeydownHandler), M.on(document, "keydown.bs.dropdown.data-api", ".dropdown-menu", ce.dataApiKeydownHandler), M.on(document, "click.bs.dropdown.data-api", ce.clearMenus), M.on(document, "keyup.bs.dropdown.data-api", ce.clearMenus), M.on(document, "click.bs.dropdown.data-api", '[data-toggle="dropdown"]', (function(t) { t.preventDefault(), t.stopPropagation(), ce.dropdownInterface(this, "toggle") })), M.on(document, "click.bs.dropdown.data-api", ".dropdown form", (function(t) { return t.stopPropagation() })), _((function() { var t = v(); if (t) { var e = t.fn[re];
            t.fn[re] = ce.jQueryInterface, t.fn[re].Constructor = ce, t.fn[re].noConflict = function() { return t.fn[re] = e, ce.jQueryInterface } } })); var fe = { backdrop: !0, keyboard: !0, focus: !0, show: !0 },
        ue = { backdrop: "(boolean|string)", keyboard: "boolean", focus: "boolean", show: "boolean" },
        he = function() {
            function t(t, e) { this._config = this._getConfig(e), this._element = t, this._dialog = Q.findOne(".modal-dialog", t), this._backdrop = null, this._isShown = !1, this._isBodyOverflowing = !1, this._ignoreBackdropClick = !1, this._isTransitioning = !1, this._scrollbarWidth = 0, y(t, "bs.modal", this) } var i = t.prototype; return i.toggle = function(t) { return this._isShown ? this.hide() : this.show(t) }, i.show = function(t) { var e = this; if (!this._isShown && !this._isTransitioning) { this._element.classList.contains("fade") && (this._isTransitioning = !0); var n = M.trigger(this._element, "show.bs.modal", { relatedTarget: t });
                    this._isShown || n.defaultPrevented || (this._isShown = !0, this._checkScrollbar(), this._setScrollbar(), this._adjustDialog(), this._setEscapeEvent(), this._setResizeEvent(), M.on(this._element, "click.dismiss.bs.modal", '[data-dismiss="modal"]', (function(t) { return e.hide(t) })), M.on(this._dialog, "mousedown.dismiss.bs.modal", (function() { M.one(e._element, "mouseup.dismiss.bs.modal", (function(t) { t.target === e._element && (e._ignoreBackdropClick = !0) })) })), this._showBackdrop((function() { return e._showElement(t) }))) } }, i.hide = function(t) { var e = this; if ((t && t.preventDefault(), this._isShown && !this._isTransitioning) && !M.trigger(this._element, "hide.bs.modal").defaultPrevented) { this._isShown = !1; var n = this._element.classList.contains("fade"); if (n && (this._isTransitioning = !0), this._setEscapeEvent(), this._setResizeEvent(), M.off(document, "focusin.bs.modal"), this._element.classList.remove("show"), M.off(this._element, "click.dismiss.bs.modal"), M.off(this._dialog, "mousedown.dismiss.bs.modal"), n) { var i = c(this._element);
                        M.one(this._element, "transitionend", (function(t) { return e._hideModal(t) })), h(this._element, i) } else this._hideModal() } }, i.dispose = function() {
                [window, this._element, this._dialog].forEach((function(t) { return M.off(t, ".bs.modal") })), M.off(document, "focusin.bs.modal"), E(this._element, "bs.modal"), this._config = null, this._element = null, this._dialog = null, this._backdrop = null, this._isShown = null, this._isBodyOverflowing = null, this._ignoreBackdropClick = null, this._isTransitioning = null, this._scrollbarWidth = null }, i.handleUpdate = function() { this._adjustDialog() }, i._getConfig = function(t) { return t = n({}, fe, t), d("modal", t, ue), t }, i._showElement = function(t) { var e = this,
                    n = this._element.classList.contains("fade"),
                    i = Q.findOne(".modal-body", this._dialog);
                this._element.parentNode && this._element.parentNode.nodeType === Node.ELEMENT_NODE || document.body.appendChild(this._element), this._element.style.display = "block", this._element.removeAttribute("aria-hidden"), this._element.setAttribute("aria-modal", !0), this._element.setAttribute("role", "dialog"), this._element.scrollTop = 0, i && (i.scrollTop = 0), n && m(this._element), this._element.classList.add("show"), this._config.focus && this._enforceFocus(); var o = function() { e._config.focus && e._element.focus(), e._isTransitioning = !1, M.trigger(e._element, "shown.bs.modal", { relatedTarget: t }) }; if (n) { var r = c(this._dialog);
                    M.one(this._dialog, "transitionend", o), h(this._dialog, r) } else o() }, i._enforceFocus = function() { var t = this;
                M.off(document, "focusin.bs.modal"), M.on(document, "focusin.bs.modal", (function(e) { document === e.target || t._element === e.target || t._element.contains(e.target) || t._element.focus() })) }, i._setEscapeEvent = function() { var t = this;
                this._isShown ? M.on(this._element, "keydown.dismiss.bs.modal", (function(e) { t._config.keyboard && "Escape" === e.key ? (e.preventDefault(), t.hide()) : t._config.keyboard || "Escape" !== e.key || t._triggerBackdropTransition() })) : M.off(this._element, "keydown.dismiss.bs.modal") }, i._setResizeEvent = function() { var t = this;
                this._isShown ? M.on(window, "resize.bs.modal", (function() { return t._adjustDialog() })) : M.off(window, "resize.bs.modal") }, i._hideModal = function() { var t = this;
                this._element.style.display = "none", this._element.setAttribute("aria-hidden", !0), this._element.removeAttribute("aria-modal"), this._element.removeAttribute("role"), this._isTransitioning = !1, this._showBackdrop((function() { document.body.classList.remove("modal-open"), t._resetAdjustments(), t._resetScrollbar(), M.trigger(t._element, "hidden.bs.modal") })) }, i._removeBackdrop = function() { this._backdrop.parentNode.removeChild(this._backdrop), this._backdrop = null }, i._showBackdrop = function(t) { var e = this,
                    n = this._element.classList.contains("fade") ? "fade" : ""; if (this._isShown && this._config.backdrop) { if (this._backdrop = document.createElement("div"), this._backdrop.className = "modal-backdrop", n && this._backdrop.classList.add(n), document.body.appendChild(this._backdrop), M.on(this._element, "click.dismiss.bs.modal", (function(t) { e._ignoreBackdropClick ? e._ignoreBackdropClick = !1 : t.target === t.currentTarget && e._triggerBackdropTransition() })), n && m(this._backdrop), this._backdrop.classList.add("show"), !n) return void t(); var i = c(this._backdrop);
                    M.one(this._backdrop, "transitionend", t), h(this._backdrop, i) } else if (!this._isShown && this._backdrop) { this._backdrop.classList.remove("show"); var o = function() { e._removeBackdrop(), t() }; if (this._element.classList.contains("fade")) { var r = c(this._backdrop);
                        M.one(this._backdrop, "transitionend", o), h(this._backdrop, r) } else o() } else t() }, i._triggerBackdropTransition = function() { var t = this; if ("static" === this._config.backdrop) { if (M.trigger(this._element, "hidePrevented.bs.modal").defaultPrevented) return; var e = this._element.scrollHeight > document.documentElement.clientHeight;
                    e || (this._element.style.overflowY = "hidden"), this._element.classList.add("modal-static"); var n = c(this._dialog);
                    M.off(this._element, "transitionend"), M.one(this._element, "transitionend", (function() { t._element.classList.remove("modal-static"), e || (M.one(t._element, "transitionend", (function() { t._element.style.overflowY = "" })), h(t._element, n)) })), h(this._element, n), this._element.focus() } else this.hide() }, i._adjustDialog = function() { var t = this._element.scrollHeight > document.documentElement.clientHeight;!this._isBodyOverflowing && t && (this._element.style.paddingLeft = this._scrollbarWidth + "px"), this._isBodyOverflowing && !t && (this._element.style.paddingRight = this._scrollbarWidth + "px") }, i._resetAdjustments = function() { this._element.style.paddingLeft = "", this._element.style.paddingRight = "" }, i._checkScrollbar = function() { var t = document.body.getBoundingClientRect();
                this._isBodyOverflowing = Math.round(t.left + t.right) < window.innerWidth, this._scrollbarWidth = this._getScrollbarWidth() }, i._setScrollbar = function() { var t = this; if (this._isBodyOverflowing) { Q.find(".fixed-top, .fixed-bottom, .is-fixed, .sticky-top").forEach((function(e) { var n = e.style.paddingRight,
                            i = window.getComputedStyle(e)["padding-right"];
                        U.setDataAttribute(e, "padding-right", n), e.style.paddingRight = parseFloat(i) + t._scrollbarWidth + "px" })), Q.find(".sticky-top").forEach((function(e) { var n = e.style.marginRight,
                            i = window.getComputedStyle(e)["margin-right"];
                        U.setDataAttribute(e, "margin-right", n), e.style.marginRight = parseFloat(i) - t._scrollbarWidth + "px" })); var e = document.body.style.paddingRight,
                        n = window.getComputedStyle(document.body)["padding-right"];
                    U.setDataAttribute(document.body, "padding-right", e), document.body.style.paddingRight = parseFloat(n) + this._scrollbarWidth + "px" }
                document.body.classList.add("modal-open") }, i._resetScrollbar = function() { Q.find(".fixed-top, .fixed-bottom, .is-fixed, .sticky-top").forEach((function(t) { var e = U.getDataAttribute(t, "padding-right");
                    void 0 !== e && (U.removeDataAttribute(t, "padding-right"), t.style.paddingRight = e) })), Q.find(".sticky-top").forEach((function(t) { var e = U.getDataAttribute(t, "margin-right");
                    void 0 !== e && (U.removeDataAttribute(t, "margin-right"), t.style.marginRight = e) })); var t = U.getDataAttribute(document.body, "padding-right");
                void 0 === t ? document.body.style.paddingRight = "" : (U.removeDataAttribute(document.body, "padding-right"), document.body.style.paddingRight = t) }, i._getScrollbarWidth = function() { var t = document.createElement("div");
                t.className = "modal-scrollbar-measure", document.body.appendChild(t); var e = t.getBoundingClientRect().width - t.clientWidth; return document.body.removeChild(t), e }, t.jQueryInterface = function(e, i) { return this.each((function() { var o = w(this, "bs.modal"),
                        r = n({}, fe, U.getDataAttributes(this), "object" == typeof e && e ? e : {}); if (o || (o = new t(this, r)), "string" == typeof e) { if (void 0 === o[e]) throw new TypeError('No method named "' + e + '"');
                        o[e](i) } else r.show && o.show(i) })) }, t.getInstance = function(t) { return w(t, "bs.modal") }, e(t, null, [{ key: "VERSION", get: function() { return "5.0.0-alpha3" } }, { key: "Default", get: function() { return fe } }]), t }();
    M.on(document, "click.bs.modal.data-api", '[data-toggle="modal"]', (function(t) { var e = this,
            i = l(this); "A" !== this.tagName && "AREA" !== this.tagName || t.preventDefault(), M.one(i, "show.bs.modal", (function(t) { t.defaultPrevented || M.one(i, "hidden.bs.modal", (function() { p(e) && e.focus() })) })); var o = w(i, "bs.modal"); if (!o) { var r = n({}, U.getDataAttributes(i), U.getDataAttributes(this));
            o = new he(i, r) }
        o.show(this) })), _((function() { var t = v(); if (t) { var e = t.fn.modal;
            t.fn.modal = he.jQueryInterface, t.fn.modal.Constructor = he, t.fn.modal.noConflict = function() { return t.fn.modal = e, he.jQueryInterface } } })); var de = ["background", "cite", "href", "itemtype", "longdesc", "poster", "src", "xlink:href"],
        pe = /^(?:(?:https?|mailto|ftp|tel|file):|[^#&/:?]*(?:[#/?]|$))/gi,
        ge = /^data:(?:image\/(?:bmp|gif|jpeg|jpg|png|tiff|webp)|video\/(?:mpeg|mp4|ogg|webm)|audio\/(?:mp3|oga|ogg|opus));base64,[\d+/a-z]+=*$/i,
        me = { "*": ["class", "dir", "id", "lang", "role", /^aria-[\w-]*$/i], a: ["target", "href", "title", "rel"], area: [], b: [], br: [], col: [], code: [], div: [], em: [], hr: [], h1: [], h2: [], h3: [], h4: [], h5: [], h6: [], i: [], img: ["src", "srcset", "alt", "title", "width", "height"], li: [], ol: [], p: [], pre: [], s: [], small: [], span: [], sub: [], sup: [], strong: [], u: [], ul: [] };

    function ve(t, e, n) { var i; if (!t.length) return t; if (n && "function" == typeof n) return n(t); for (var o = (new window.DOMParser).parseFromString(t, "text/html"), r = Object.keys(e), s = (i = []).concat.apply(i, o.body.querySelectorAll("*")), a = function(t, n) { var i, o = s[t],
                    a = o.nodeName.toLowerCase(); if (-1 === r.indexOf(a)) return o.parentNode.removeChild(o), "continue"; var l = (i = []).concat.apply(i, o.attributes),
                    c = [].concat(e["*"] || [], e[a] || []);
                l.forEach((function(t) {
                    (function(t, e) { var n = t.nodeName.toLowerCase(); if (-1 !== e.indexOf(n)) return -1 === de.indexOf(n) || Boolean(t.nodeValue.match(pe) || t.nodeValue.match(ge)); for (var i = e.filter((function(t) { return t instanceof RegExp })), o = 0, r = i.length; o < r; o++)
                            if (n.match(i[o])) return !0;
                        return !1 })(t, c) || o.removeAttribute(t.nodeName) })) }, l = 0, c = s.length; l < c; l++) a(l); return o.body.innerHTML } var _e = "tooltip",
        be = new RegExp("(^|\\s)bs-tooltip\\S+", "g"),
        ye = ["sanitize", "allowList", "sanitizeFn"],
        we = { animation: "boolean", template: "string", title: "(string|element|function)", trigger: "string", delay: "(number|object)", html: "boolean", selector: "(string|boolean)", placement: "(string|function)", offset: "(number|string|function)", container: "(string|element|boolean)", fallbackPlacement: "(string|array)", boundary: "(string|element)", sanitize: "boolean", sanitizeFn: "(null|function)", allowList: "object", popperConfig: "(null|object)" },
        Ee = { AUTO: "auto", TOP: "top", RIGHT: "right", BOTTOM: "bottom", LEFT: "left" },
        Te = { animation: !0, template: '<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>', trigger: "hover focus", title: "", delay: 0, html: !1, selector: !1, placement: "top", offset: 0, container: !1, fallbackPlacement: "flip", boundary: "scrollParent", sanitize: !0, sanitizeFn: null, allowList: me, popperConfig: null },
        Le = { HIDE: "hide.bs.tooltip", HIDDEN: "hidden.bs.tooltip", SHOW: "show.bs.tooltip", SHOWN: "shown.bs.tooltip", INSERTED: "inserted.bs.tooltip", CLICK: "click.bs.tooltip", FOCUSIN: "focusin.bs.tooltip", FOCUSOUT: "focusout.bs.tooltip", MOUSEENTER: "mouseenter.bs.tooltip", MOUSELEAVE: "mouseleave.bs.tooltip" },
        ke = function() {
            function t(t, e) { if (void 0 === oe) throw new TypeError("Bootstrap's tooltips require Popper.js (https://popper.js.org)");
                this._isEnabled = !0, this._timeout = 0, this._hoverState = "", this._activeTrigger = {}, this._popper = null, this.element = t, this.config = this._getConfig(e), this.tip = null, this._setListeners(), y(t, this.constructor.DATA_KEY, this) } var i = t.prototype; return i.enable = function() { this._isEnabled = !0 }, i.disable = function() { this._isEnabled = !1 }, i.toggleEnabled = function() { this._isEnabled = !this._isEnabled }, i.toggle = function(t) { if (this._isEnabled)
                    if (t) { var e = this.constructor.DATA_KEY,
                            n = w(t.delegateTarget, e);
                        n || (n = new this.constructor(t.delegateTarget, this._getDelegateConfig()), y(t.delegateTarget, e, n)), n._activeTrigger.click = !n._activeTrigger.click, n._isWithActiveTrigger() ? n._enter(null, n) : n._leave(null, n) } else { if (this.getTipElement().classList.contains("show")) return void this._leave(null, this);
                        this._enter(null, this) } }, i.dispose = function() { clearTimeout(this._timeout), E(this.element, this.constructor.DATA_KEY), M.off(this.element, this.constructor.EVENT_KEY), M.off(this.element.closest(".modal"), "hide.bs.modal", this._hideModalHandler), this.tip && this.tip.parentNode.removeChild(this.tip), this._isEnabled = null, this._timeout = null, this._hoverState = null, this._activeTrigger = null, this._popper && this._popper.destroy(), this._popper = null, this.element = null, this.config = null, this.tip = null }, i.show = function() { var t = this; if ("none" === this.element.style.display) throw new Error("Please use show on visible elements"); if (this.isWithContent() && this._isEnabled) { var e = M.trigger(this.element, this.constructor.Event.SHOW),
                        n = function t(e) { if (!document.documentElement.attachShadow) return null; if ("function" == typeof e.getRootNode) { var n = e.getRootNode(); return n instanceof ShadowRoot ? n : null } return e instanceof ShadowRoot ? e : e.parentNode ? t(e.parentNode) : null }(this.element),
                        i = null === n ? this.element.ownerDocument.documentElement.contains(this.element) : n.contains(this.element); if (e.defaultPrevented || !i) return; var o = this.getTipElement(),
                        s = r(this.constructor.NAME);
                    o.setAttribute("id", s), this.element.setAttribute("aria-describedby", s), this.setContent(), this.config.animation && o.classList.add("fade"); var a = "function" == typeof this.config.placement ? this.config.placement.call(this, o, this.element) : this.config.placement,
                        l = this._getAttachment(a);
                    this._addAttachmentClass(l); var f, u = this._getContainer(); if (y(o, this.constructor.DATA_KEY, this), this.element.ownerDocument.documentElement.contains(this.tip) || u.appendChild(o), M.trigger(this.element, this.constructor.Event.INSERTED), this._popper = new oe(this.element, o, this._getPopperConfig(l)), o.classList.add("show"), "ontouchstart" in document.documentElement)(f = []).concat.apply(f, document.body.children).forEach((function(t) { M.on(t, "mouseover", (function() {})) })); var d = function() { t.config.animation && t._fixTransition(); var e = t._hoverState;
                        t._hoverState = null, M.trigger(t.element, t.constructor.Event.SHOWN), "out" === e && t._leave(null, t) }; if (this.tip.classList.contains("fade")) { var p = c(this.tip);
                        M.one(this.tip, "transitionend", d), h(this.tip, p) } else d() } }, i.hide = function() { var t = this; if (this._popper) { var e = this.getTipElement(),
                        n = function() { "show" !== t._hoverState && e.parentNode && e.parentNode.removeChild(e), t._cleanTipClass(), t.element.removeAttribute("aria-describedby"), M.trigger(t.element, t.constructor.Event.HIDDEN), t._popper.destroy() }; if (!M.trigger(this.element, this.constructor.Event.HIDE).defaultPrevented) { var i; if (e.classList.remove("show"), "ontouchstart" in document.documentElement)(i = []).concat.apply(i, document.body.children).forEach((function(t) { return M.off(t, "mouseover", g) })); if (this._activeTrigger.click = !1, this._activeTrigger.focus = !1, this._activeTrigger.hover = !1, this.tip.classList.contains("fade")) { var o = c(e);
                            M.one(e, "transitionend", n), h(e, o) } else n();
                        this._hoverState = "" } } }, i.update = function() { null !== this._popper && this._popper.scheduleUpdate() }, i.isWithContent = function() { return Boolean(this.getTitle()) }, i.getTipElement = function() { if (this.tip) return this.tip; var t = document.createElement("div"); return t.innerHTML = this.config.template, this.tip = t.children[0], this.tip }, i.setContent = function() { var t = this.getTipElement();
                this.setElementContent(Q.findOne(".tooltip-inner", t), this.getTitle()), t.classList.remove("fade", "show") }, i.setElementContent = function(t, e) { if (null !== t) return "object" == typeof e && u(e) ? (e.jquery && (e = e[0]), void(this.config.html ? e.parentNode !== t && (t.innerHTML = "", t.appendChild(e)) : t.textContent = e.textContent)) : void(this.config.html ? (this.config.sanitize && (e = ve(e, this.config.allowList, this.config.sanitizeFn)), t.innerHTML = e) : t.textContent = e) }, i.getTitle = function() { var t = this.element.getAttribute("data-original-title"); return t || (t = "function" == typeof this.config.title ? this.config.title.call(this.element) : this.config.title), t }, i._getPopperConfig = function(t) { var e = this; return n({}, { placement: t, modifiers: { offset: this._getOffset(), flip: { behavior: this.config.fallbackPlacement }, arrow: { element: "." + this.constructor.NAME + "-arrow" }, preventOverflow: { boundariesElement: this.config.boundary } }, onCreate: function(t) { t.originalPlacement !== t.placement && e._handlePopperPlacementChange(t) }, onUpdate: function(t) { return e._handlePopperPlacementChange(t) } }, this.config.popperConfig) }, i._addAttachmentClass = function(t) { this.getTipElement().classList.add("bs-tooltip-" + t) }, i._getOffset = function() { var t = this,
                    e = {}; return "function" == typeof this.config.offset ? e.fn = function(e) { return e.offsets = n({}, e.offsets, t.config.offset(e.offsets, t.element) || {}), e } : e.offset = this.config.offset, e }, i._getContainer = function() { return !1 === this.config.container ? document.body : u(this.config.container) ? this.config.container : Q.findOne(this.config.container) }, i._getAttachment = function(t) { return Ee[t.toUpperCase()] }, i._setListeners = function() { var t = this;
                this.config.trigger.split(" ").forEach((function(e) { if ("click" === e) M.on(t.element, t.constructor.Event.CLICK, t.config.selector, (function(e) { return t.toggle(e) }));
                    else if ("manual" !== e) { var n = "hover" === e ? t.constructor.Event.MOUSEENTER : t.constructor.Event.FOCUSIN,
                            i = "hover" === e ? t.constructor.Event.MOUSELEAVE : t.constructor.Event.FOCUSOUT;
                        M.on(t.element, n, t.config.selector, (function(e) { return t._enter(e) })), M.on(t.element, i, t.config.selector, (function(e) { return t._leave(e) })) } })), this._hideModalHandler = function() { t.element && t.hide() }, M.on(this.element.closest(".modal"), "hide.bs.modal", this._hideModalHandler), this.config.selector ? this.config = n({}, this.config, { trigger: "manual", selector: "" }) : this._fixTitle() }, i._fixTitle = function() { var t = typeof this.element.getAttribute("data-original-title");
                (this.element.getAttribute("title") || "string" !== t) && (this.element.setAttribute("data-original-title", this.element.getAttribute("title") || ""), this.element.setAttribute("title", "")) }, i._enter = function(t, e) { var n = this.constructor.DATA_KEY;
                (e = e || w(t.delegateTarget, n)) || (e = new this.constructor(t.delegateTarget, this._getDelegateConfig()), y(t.delegateTarget, n, e)), t && (e._activeTrigger["focusin" === t.type ? "focus" : "hover"] = !0), e.getTipElement().classList.contains("show") || "show" === e._hoverState ? e._hoverState = "show" : (clearTimeout(e._timeout), e._hoverState = "show", e.config.delay && e.config.delay.show ? e._timeout = setTimeout((function() { "show" === e._hoverState && e.show() }), e.config.delay.show) : e.show()) }, i._leave = function(t, e) { var n = this.constructor.DATA_KEY;
                (e = e || w(t.delegateTarget, n)) || (e = new this.constructor(t.delegateTarget, this._getDelegateConfig()), y(t.delegateTarget, n, e)), t && (e._activeTrigger["focusout" === t.type ? "focus" : "hover"] = !1), e._isWithActiveTrigger() || (clearTimeout(e._timeout), e._hoverState = "out", e.config.delay && e.config.delay.hide ? e._timeout = setTimeout((function() { "out" === e._hoverState && e.hide() }), e.config.delay.hide) : e.hide()) }, i._isWithActiveTrigger = function() { for (var t in this._activeTrigger)
                    if (this._activeTrigger[t]) return !0;
                return !1 }, i._getConfig = function(t) { var e = U.getDataAttributes(this.element); return Object.keys(e).forEach((function(t) {-1 !== ye.indexOf(t) && delete e[t] })), t && "object" == typeof t.container && t.container.jquery && (t.container = t.container[0]), "number" == typeof(t = n({}, this.constructor.Default, e, "object" == typeof t && t ? t : {})).delay && (t.delay = { show: t.delay, hide: t.delay }), "number" == typeof t.title && (t.title = t.title.toString()), "number" == typeof t.content && (t.content = t.content.toString()), d(_e, t, this.constructor.DefaultType), t.sanitize && (t.template = ve(t.template, t.allowList, t.sanitizeFn)), t }, i._getDelegateConfig = function() { var t = {}; if (this.config)
                    for (var e in this.config) this.constructor.Default[e] !== this.config[e] && (t[e] = this.config[e]); return t }, i._cleanTipClass = function() { var t = this.getTipElement(),
                    e = t.getAttribute("class").match(be);
                null !== e && e.length > 0 && e.map((function(t) { return t.trim() })).forEach((function(e) { return t.classList.remove(e) })) }, i._handlePopperPlacementChange = function(t) { this.tip = t.instance.popper, this._cleanTipClass(), this._addAttachmentClass(this._getAttachment(t.placement)) }, i._fixTransition = function() { var t = this.getTipElement(),
                    e = this.config.animation;
                null === t.getAttribute("x-placement") && (t.classList.remove("fade"), this.config.animation = !1, this.hide(), this.show(), this.config.animation = e) }, t.jQueryInterface = function(e) { return this.each((function() { var n = w(this, "bs.tooltip"),
                        i = "object" == typeof e && e; if ((n || !/dispose|hide/.test(e)) && (n || (n = new t(this, i)), "string" == typeof e)) { if (void 0 === n[e]) throw new TypeError('No method named "' + e + '"');
                        n[e]() } })) }, t.getInstance = function(t) { return w(t, "bs.tooltip") }, e(t, null, [{ key: "VERSION", get: function() { return "5.0.0-alpha3" } }, { key: "Default", get: function() { return Te } }, { key: "NAME", get: function() { return _e } }, { key: "DATA_KEY", get: function() { return "bs.tooltip" } }, { key: "Event", get: function() { return Le } }, { key: "EVENT_KEY", get: function() { return ".bs.tooltip" } }, { key: "DefaultType", get: function() { return we } }]), t }();
    _((function() { var t = v(); if (t) { var e = t.fn[_e];
            t.fn[_e] = ke.jQueryInterface, t.fn[_e].Constructor = ke, t.fn[_e].noConflict = function() { return t.fn[_e] = e, ke.jQueryInterface } } })); var Ce = "popover",
        Oe = new RegExp("(^|\\s)bs-popover\\S+", "g"),
        Ae = n({}, ke.Default, { placement: "right", trigger: "click", content: "", template: '<div class="popover" role="tooltip"><div class="popover-arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>' }),
        De = n({}, ke.DefaultType, { content: "(string|element|function)" }),
        Se = { HIDE: "hide.bs.popover", HIDDEN: "hidden.bs.popover", SHOW: "show.bs.popover", SHOWN: "shown.bs.popover", INSERTED: "inserted.bs.popover", CLICK: "click.bs.popover", FOCUSIN: "focusin.bs.popover", FOCUSOUT: "focusout.bs.popover", MOUSEENTER: "mouseenter.bs.popover", MOUSELEAVE: "mouseleave.bs.popover" },
        xe = function(t) { var n, i;

            function o() { return t.apply(this, arguments) || this }
            i = t, (n = o).prototype = Object.create(i.prototype), n.prototype.constructor = n, n.__proto__ = i; var r = o.prototype; return r.isWithContent = function() { return this.getTitle() || this._getContent() }, r.setContent = function() { var t = this.getTipElement();
                this.setElementContent(Q.findOne(".popover-header", t), this.getTitle()); var e = this._getContent(); "function" == typeof e && (e = e.call(this.element)), this.setElementContent(Q.findOne(".popover-body", t), e), t.classList.remove("fade", "show") }, r._addAttachmentClass = function(t) { this.getTipElement().classList.add("bs-popover-" + t) }, r._getContent = function() { return this.element.getAttribute("data-content") || this.config.content }, r._cleanTipClass = function() { var t = this.getTipElement(),
                    e = t.getAttribute("class").match(Oe);
                null !== e && e.length > 0 && e.map((function(t) { return t.trim() })).forEach((function(e) { return t.classList.remove(e) })) }, o.jQueryInterface = function(t) { return this.each((function() { var e = w(this, "bs.popover"),
                        n = "object" == typeof t ? t : null; if ((e || !/dispose|hide/.test(t)) && (e || (e = new o(this, n), y(this, "bs.popover", e)), "string" == typeof t)) { if (void 0 === e[t]) throw new TypeError('No method named "' + t + '"');
                        e[t]() } })) }, o.getInstance = function(t) { return w(t, "bs.popover") }, e(o, null, [{ key: "VERSION", get: function() { return "5.0.0-alpha3" } }, { key: "Default", get: function() { return Ae } }, { key: "NAME", get: function() { return Ce } }, { key: "DATA_KEY", get: function() { return "bs.popover" } }, { key: "Event", get: function() { return Se } }, { key: "EVENT_KEY", get: function() { return ".bs.popover" } }, { key: "DefaultType", get: function() { return De } }]), o }(ke);
    _((function() { var t = v(); if (t) { var e = t.fn[Ce];
            t.fn[Ce] = xe.jQueryInterface, t.fn[Ce].Constructor = xe, t.fn[Ce].noConflict = function() { return t.fn[Ce] = e, xe.jQueryInterface } } })); var Ne = "scrollspy",
        Ie = { offset: 10, method: "auto", target: "" },
        je = { offset: "number", method: "string", target: "(string|element)" },
        Pe = function() {
            function t(t, e) { var n = this;
                this._element = t, this._scrollElement = "BODY" === t.tagName ? window : t, this._config = this._getConfig(e), this._selector = this._config.target + " .nav-link, " + this._config.target + " .list-group-item, " + this._config.target + " .dropdown-item", this._offsets = [], this._targets = [], this._activeTarget = null, this._scrollHeight = 0, M.on(this._scrollElement, "scroll.bs.scrollspy", (function(t) { return n._process(t) })), this.refresh(), this._process(), y(t, "bs.scrollspy", this) } var i = t.prototype; return i.refresh = function() { var t = this,
                    e = this._scrollElement === this._scrollElement.window ? "offset" : "position",
                    n = "auto" === this._config.method ? e : this._config.method,
                    i = "position" === n ? this._getScrollTop() : 0;
                this._offsets = [], this._targets = [], this._scrollHeight = this._getScrollHeight(), Q.find(this._selector).map((function(t) { var e = a(t),
                        o = e ? Q.findOne(e) : null; if (o) { var r = o.getBoundingClientRect(); if (r.width || r.height) return [U[n](o).top + i, e] } return null })).filter((function(t) { return t })).sort((function(t, e) { return t[0] - e[0] })).forEach((function(e) { t._offsets.push(e[0]), t._targets.push(e[1]) })) }, i.dispose = function() { E(this._element, "bs.scrollspy"), M.off(this._scrollElement, ".bs.scrollspy"), this._element = null, this._scrollElement = null, this._config = null, this._selector = null, this._offsets = null, this._targets = null, this._activeTarget = null, this._scrollHeight = null }, i._getConfig = function(t) { if ("string" != typeof(t = n({}, Ie, "object" == typeof t && t ? t : {})).target && u(t.target)) { var e = t.target.id;
                    e || (e = r(Ne), t.target.id = e), t.target = "#" + e } return d(Ne, t, je), t }, i._getScrollTop = function() { return this._scrollElement === window ? this._scrollElement.pageYOffset : this._scrollElement.scrollTop }, i._getScrollHeight = function() { return this._scrollElement.scrollHeight || Math.max(document.body.scrollHeight, document.documentElement.scrollHeight) }, i._getOffsetHeight = function() { return this._scrollElement === window ? window.innerHeight : this._scrollElement.getBoundingClientRect().height }, i._process = function() { var t = this._getScrollTop() + this._config.offset,
                    e = this._getScrollHeight(),
                    n = this._config.offset + e - this._getOffsetHeight(); if (this._scrollHeight !== e && this.refresh(), t >= n) { var i = this._targets[this._targets.length - 1];
                    this._activeTarget !== i && this._activate(i) } else { if (this._activeTarget && t < this._offsets[0] && this._offsets[0] > 0) return this._activeTarget = null, void this._clear(); for (var o = this._offsets.length; o--;) { this._activeTarget !== this._targets[o] && t >= this._offsets[o] && (void 0 === this._offsets[o + 1] || t < this._offsets[o + 1]) && this._activate(this._targets[o]) } } }, i._activate = function(t) { this._activeTarget = t, this._clear(); var e = this._selector.split(",").map((function(e) { return e + '[data-target="' + t + '"],' + e + '[href="' + t + '"]' })),
                    n = Q.findOne(e.join(","));
                n.classList.contains("dropdown-item") ? (Q.findOne(".dropdown-toggle", n.closest(".dropdown")).classList.add("active"), n.classList.add("active")) : (n.classList.add("active"), Q.parents(n, ".nav, .list-group").forEach((function(t) { Q.prev(t, ".nav-link, .list-group-item").forEach((function(t) { return t.classList.add("active") })), Q.prev(t, ".nav-item").forEach((function(t) { Q.children(t, ".nav-link").forEach((function(t) { return t.classList.add("active") })) })) }))), M.trigger(this._scrollElement, "activate.bs.scrollspy", { relatedTarget: t }) }, i._clear = function() { Q.find(this._selector).filter((function(t) { return t.classList.contains("active") })).forEach((function(t) { return t.classList.remove("active") })) }, t.jQueryInterface = function(e) { return this.each((function() { var n = w(this, "bs.scrollspy"); if (n || (n = new t(this, "object" == typeof e && e)), "string" == typeof e) { if (void 0 === n[e]) throw new TypeError('No method named "' + e + '"');
                        n[e]() } })) }, t.getInstance = function(t) { return w(t, "bs.scrollspy") }, e(t, null, [{ key: "VERSION", get: function() { return "5.0.0-alpha3" } }, { key: "Default", get: function() { return Ie } }]), t }();
    M.on(window, "load.bs.scrollspy.data-api", (function() { Q.find('[data-spy="scroll"]').forEach((function(t) { return new Pe(t, U.getDataAttributes(t)) })) })), _((function() { var t = v(); if (t) { var e = t.fn[Ne];
            t.fn[Ne] = Pe.jQueryInterface, t.fn[Ne].Constructor = Pe, t.fn[Ne].noConflict = function() { return t.fn[Ne] = e, Pe.jQueryInterface } } })); var Me = function() {
        function t(t) { this._element = t, y(this._element, "bs.tab", this) } var n = t.prototype; return n.show = function() { var t = this; if (!(this._element.parentNode && this._element.parentNode.nodeType === Node.ELEMENT_NODE && this._element.classList.contains("active") || this._element.classList.contains("disabled"))) { var e, n = l(this._element),
                    i = this._element.closest(".nav, .list-group"); if (i) { var o = "UL" === i.nodeName || "OL" === i.nodeName ? ":scope > li > .active" : ".active";
                    e = (e = Q.find(o, i))[e.length - 1] } var r = null; if (e && (r = M.trigger(e, "hide.bs.tab", { relatedTarget: this._element })), !(M.trigger(this._element, "show.bs.tab", { relatedTarget: e }).defaultPrevented || null !== r && r.defaultPrevented)) { this._activate(this._element, i); var s = function() { M.trigger(e, "hidden.bs.tab", { relatedTarget: t._element }), M.trigger(t._element, "shown.bs.tab", { relatedTarget: e }) };
                    n ? this._activate(n, n.parentNode, s) : s() } } }, n.dispose = function() { E(this._element, "bs.tab"), this._element = null }, n._activate = function(t, e, n) { var i = this,
                o = (!e || "UL" !== e.nodeName && "OL" !== e.nodeName ? Q.children(e, ".active") : Q.find(":scope > li > .active", e))[0],
                r = n && o && o.classList.contains("fade"),
                s = function() { return i._transitionComplete(t, o, n) }; if (o && r) { var a = c(o);
                o.classList.remove("show"), M.one(o, "transitionend", s), h(o, a) } else s() }, n._transitionComplete = function(t, e, n) { if (e) { e.classList.remove("active"); var i = Q.findOne(":scope > .dropdown-menu .active", e.parentNode);
                i && i.classList.remove("active"), "tab" === e.getAttribute("role") && e.setAttribute("aria-selected", !1) }(t.classList.add("active"), "tab" === t.getAttribute("role") && t.setAttribute("aria-selected", !0), m(t), t.classList.contains("fade") && t.classList.add("show"), t.parentNode && t.parentNode.classList.contains("dropdown-menu")) && (t.closest(".dropdown") && Q.find(".dropdown-toggle").forEach((function(t) { return t.classList.add("active") })), t.setAttribute("aria-expanded", !0));
            n && n() }, t.jQueryInterface = function(e) { return this.each((function() { var n = w(this, "bs.tab") || new t(this); if ("string" == typeof e) { if (void 0 === n[e]) throw new TypeError('No method named "' + e + '"');
                    n[e]() } })) }, t.getInstance = function(t) { return w(t, "bs.tab") }, e(t, null, [{ key: "VERSION", get: function() { return "5.0.0-alpha3" } }]), t }();
    M.on(document, "click.bs.tab.data-api", '[data-toggle="tab"], [data-toggle="pill"], [data-toggle="list"]', (function(t) { t.preventDefault(), (w(this, "bs.tab") || new Me(this)).show() })), _((function() { var t = v(); if (t) { var e = t.fn.tab;
            t.fn.tab = Me.jQueryInterface, t.fn.tab.Constructor = Me, t.fn.tab.noConflict = function() { return t.fn.tab = e, Me.jQueryInterface } } })); var He = { animation: "boolean", autohide: "boolean", delay: "number" },
        Re = { animation: !0, autohide: !0, delay: 5e3 },
        Be = function() {
            function t(t, e) { this._element = t, this._config = this._getConfig(e), this._timeout = null, this._setListeners(), y(t, "bs.toast", this) } var i = t.prototype; return i.show = function() { var t = this; if (!M.trigger(this._element, "show.bs.toast").defaultPrevented) { this._clearTimeout(), this._config.animation && this._element.classList.add("fade"); var e = function() { t._element.classList.remove("showing"), t._element.classList.add("show"), M.trigger(t._element, "shown.bs.toast"), t._config.autohide && (t._timeout = setTimeout((function() { t.hide() }), t._config.delay)) }; if (this._element.classList.remove("hide"), m(this._element), this._element.classList.add("showing"), this._config.animation) { var n = c(this._element);
                        M.one(this._element, "transitionend", e), h(this._element, n) } else e() } }, i.hide = function() { var t = this; if (this._element.classList.contains("show") && !M.trigger(this._element, "hide.bs.toast").defaultPrevented) { var e = function() { t._element.classList.add("hide"), M.trigger(t._element, "hidden.bs.toast") }; if (this._element.classList.remove("show"), this._config.animation) { var n = c(this._element);
                        M.one(this._element, "transitionend", e), h(this._element, n) } else e() } }, i.dispose = function() { this._clearTimeout(), this._element.classList.contains("show") && this._element.classList.remove("show"), M.off(this._element, "click.dismiss.bs.toast"), E(this._element, "bs.toast"), this._element = null, this._config = null }, i._getConfig = function(t) { return t = n({}, Re, U.getDataAttributes(this._element), "object" == typeof t && t ? t : {}), d("toast", t, this.constructor.DefaultType), t }, i._setListeners = function() { var t = this;
                M.on(this._element, "click.dismiss.bs.toast", '[data-dismiss="toast"]', (function() { return t.hide() })) }, i._clearTimeout = function() { clearTimeout(this._timeout), this._timeout = null }, t.jQueryInterface = function(e) { return this.each((function() { var n = w(this, "bs.toast"); if (n || (n = new t(this, "object" == typeof e && e)), "string" == typeof e) { if (void 0 === n[e]) throw new TypeError('No method named "' + e + '"');
                        n[e](this) } })) }, t.getInstance = function(t) { return w(t, "bs.toast") }, e(t, null, [{ key: "VERSION", get: function() { return "5.0.0-alpha3" } }, { key: "DefaultType", get: function() { return He } }, { key: "Default", get: function() { return Re } }]), t }(); return _((function() { var t = v(); if (t) { var e = t.fn.toast;
            t.fn.toast = Be.jQueryInterface, t.fn.toast.Constructor = Be, t.fn.toast.noConflict = function() { return t.fn.toast = e, Be.jQueryInterface } } })), { Alert: R, Button: B, Carousel: X, Collapse: J, Dropdown: ce, Modal: he, Popover: xe, ScrollSpy: Pe, Tab: Me, Toast: Be, Tooltip: ke } }));
//# sourceMappingURL=bootstrap.bundle.min.js.map