"use strict"; function _classCallCheck(t, i) { if (!(t instanceof i)) throw new TypeError("Cannot call a class as a function") } var _createClass = function () { function t(t, i) { for (var e = 0; e < i.length; e++) { var n = i[e]; n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(t, n.key, n) } } return function (i, e, n) { return e && t(i.prototype, e), n && t(i, n), i } }(), ConditionalField = function () { function t(i) { _classCallCheck(this, t), this.$control = $(i.control), 0 != this.$control.length && (this.args = i, this.inputType = this.getInputType(), this.setVisible(this.inputValue()), this.onChangeBound = this.onChange.bind(this), this.$control.on("change", this.onChangeBound)) } return _createClass(t, [{ key: "onChange", value: function (t) { var i = this.inputValue(); this.setVisible(i) } }, { key: "setVisible", value: function (t) { for (var i in this.args.visibility) t == i ? $(this.args.visibility[i]).show() : $(this.args.visibility[i]).hide() } }, { key: "getInputType", value: function () { return this.$control.is("select") ? "select" : this.$control.is(":radio") ? "radio" : this.$control.is(":checkbox") ? "checkbox" : void 0 } }, { key: "inputValue", value: function () { var t = ""; switch (this.inputType) { case "checkbox": t = this.$control.is(":checked") ? "on" : "off"; break; case "radio": t = this.$control.filter(":checked").val(); break; default: t = this.$control.val() }return t } }, { key: "destroy", value: function () { this.$control.off("change", this.onChangeBound) } }]), t }();