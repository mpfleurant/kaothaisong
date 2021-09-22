!function(t,e){"function"==typeof define&&define.amd?define(e):"object"==typeof module&&module.exports?module.exports=e():t.Colcade=e()}(window,function(){function s(t,e){if((t=r(t))&&t.colcadeGUID){var i=n[t.colcadeGUID];return i.option(e),i}this.element=t,this.options={},this.option(e),this.create()}var t=s.prototype;t.option=function(t){this.options=function(t,e){for(var i in e)t[i]=e[i];return t}(this.options,t)};var e=0,n={};function i(t){var e=t.getAttribute("data-colcade").split(","),o={};e.forEach(function(t){var e=t.split(":"),i=e[0].trim(),n=e[1].trim();o[i]=n}),new s(t,o)}function o(t){var e=[];if(Array.isArray(t))e=t;else if(t&&"number"==typeof t.length)for(var i=0;i<t.length;i++)e.push(t[i]);else e.push(t);return e}function u(t,e){return o((e=e||document).querySelectorAll(t))}function r(t){return"string"==typeof t&&(t=document.querySelector(t)),t}return t.create=function(){this.errorCheck();var t=this.guid=++e;this.element.colcadeGUID=t,(n[t]=this).reload(),this._windowResizeHandler=this.onWindowResize.bind(this),this._loadHandler=this.onLoad.bind(this),window.addEventListener("resize",this._windowResizeHandler),this.element.addEventListener("load",this._loadHandler,!0)},t.errorCheck=function(){var t=[];if(this.element||t.push("Bad element: "+this.element),this.options.columns||t.push("columns option required: "+this.options.columns),this.options.items||t.push("items option required: "+this.options.items),t.length)throw new Error("[Colcade error] "+t.join(". "))},t.reload=function(){this.updateColumns(),this.updateItems(),this.layout()},t.updateColumns=function(){this.columns=u(this.options.columns,this.element)},t.updateItems=function(){this.items=u(this.options.items,this.element)},t.getActiveColumns=function(){return this.columns.filter(function(t){return"none"!=getComputedStyle(t).display})},t.layout=function(){this.activeColumns=this.getActiveColumns(),this._layout()},t._layout=function(){this.columnHeights=this.activeColumns.map(function(){return 0}),this.layoutItems(this.items)},t.layoutItems=function(t){t.forEach(this.layoutItem,this)},t.layoutItem=function(t){var e=Math.min.apply(Math,this.columnHeights),i=this.columnHeights.indexOf(e);this.activeColumns[i].appendChild(t),this.columnHeights[i]+=t.offsetHeight||1},t.append=function(t){var e=this.getQueryItems(t);this.items=this.items.concat(e),this.layoutItems(e)},t.prepend=function(t){var e=this.getQueryItems(t);this.items=e.concat(this.items),this._layout()},t.getQueryItems=function(t){t=o(t);var e=document.createDocumentFragment();return t.forEach(function(t){e.appendChild(t)}),u(this.options.items,e)},t.measureColumnHeight=function(n){var o=this.element.getBoundingClientRect();this.activeColumns.forEach(function(t,e){if(!n||t.contains(n)){var i=t.lastElementChild.getBoundingClientRect();this.columnHeights[e]=i.bottom-o.top}},this)},t.onWindowResize=function(){clearTimeout(this.resizeTimeout),this.resizeTimeout=setTimeout(function(){this.onDebouncedResize()}.bind(this),100)},t.onDebouncedResize=function(){var i=this.getActiveColumns(),t=i.length==this.activeColumns.length,n=!0;this.activeColumns.forEach(function(t,e){n=n&&t==i[e]}),t&&n||(this.activeColumns=i,this._layout())},t.onLoad=function(t){this.measureColumnHeight(t.target)},t.destroy=function(){this.items.forEach(function(t){this.element.appendChild(t)},this),window.removeEventListener("resize",this._windowResizeHandler),this.element.removeEventListener("load",this._loadHandler,!0),delete this.element.colcadeGUID,delete n[this.guid]},function(t){if("complete"==document.readyState)return t();document.addEventListener("DOMContentLoaded",t)}(function(){u("[data-colcade]").forEach(i)}),s.data=function(t){var e=(t=r(t))&&t.colcadeGUID;return e&&n[e]},s.makeJQueryPlugin=function(r){(r=r||window.jQuery)&&(r.fn.colcade=function(t){return"string"==typeof t?function(t,o,s){var u;return t.each(function(t,e){var i=r.data(e,"colcade");if(i){var n=i[o].apply(i,s);u=void 0===u?n:u}}),void 0!==u?u:t}(this,t,Array.prototype.slice.call(arguments,1)):(function(t,n){t.each(function(t,e){var i=r.data(e,"colcade");i?(i.option(n),i.layout()):(i=new s(e,n),r.data(e,"colcade",i))})}(this,t),this)})},s.makeJQueryPlugin(),s});
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImNvbGNhZGUuanMiXSwibmFtZXMiOlsid2luZG93IiwiZmFjdG9yeSIsImRlZmluZSIsImFtZCIsIm1vZHVsZSIsImV4cG9ydHMiLCJDb2xjYWRlIiwiZWxlbWVudCIsIm9wdGlvbnMiLCJnZXRRdWVyeUVsZW1lbnQiLCJjb2xjYWRlR1VJRCIsImluc3RhbmNlIiwiaW5zdGFuY2VzIiwib3B0aW9uIiwidGhpcyIsImNyZWF0ZSIsInByb3RvIiwicHJvdG90eXBlIiwiYSIsImIiLCJwcm9wIiwiZXh0ZW5kIiwiR1VJRCIsImh0bWxJbml0IiwiZWxlbSIsImF0dHJQYXJ0cyIsImdldEF0dHJpYnV0ZSIsInNwbGl0IiwiZm9yRWFjaCIsInBhcnQiLCJwYWlyIiwia2V5IiwidHJpbSIsInZhbHVlIiwibWFrZUFycmF5Iiwib2JqIiwiYXJ5IiwiQXJyYXkiLCJpc0FycmF5IiwibGVuZ3RoIiwiaSIsInB1c2giLCJxdWVyeVNlbGVjdCIsInNlbGVjdG9yIiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yQWxsIiwicXVlcnlTZWxlY3RvciIsImVycm9yQ2hlY2siLCJndWlkIiwicmVsb2FkIiwiX3dpbmRvd1Jlc2l6ZUhhbmRsZXIiLCJvbldpbmRvd1Jlc2l6ZSIsImJpbmQiLCJfbG9hZEhhbmRsZXIiLCJvbkxvYWQiLCJhZGRFdmVudExpc3RlbmVyIiwiZXJyb3JzIiwiY29sdW1ucyIsIml0ZW1zIiwiRXJyb3IiLCJqb2luIiwidXBkYXRlQ29sdW1ucyIsInVwZGF0ZUl0ZW1zIiwibGF5b3V0IiwiZ2V0QWN0aXZlQ29sdW1ucyIsImZpbHRlciIsImNvbHVtbiIsImdldENvbXB1dGVkU3R5bGUiLCJkaXNwbGF5IiwiYWN0aXZlQ29sdW1ucyIsIl9sYXlvdXQiLCJjb2x1bW5IZWlnaHRzIiwibWFwIiwibGF5b3V0SXRlbXMiLCJsYXlvdXRJdGVtIiwiaXRlbSIsIm1pbkhlaWdodCIsIk1hdGgiLCJtaW4iLCJhcHBseSIsImluZGV4IiwiaW5kZXhPZiIsImFwcGVuZENoaWxkIiwib2Zmc2V0SGVpZ2h0IiwiYXBwZW5kIiwiZWxlbXMiLCJnZXRRdWVyeUl0ZW1zIiwiY29uY2F0IiwicHJlcGVuZCIsImZyYWdtZW50IiwiY3JlYXRlRG9jdW1lbnRGcmFnbWVudCIsIm1lYXN1cmVDb2x1bW5IZWlnaHQiLCJib3VuZGluZ1JlY3QiLCJnZXRCb3VuZGluZ0NsaWVudFJlY3QiLCJjb250YWlucyIsImxhc3RDaGlsZFJlY3QiLCJsYXN0RWxlbWVudENoaWxkIiwiYm90dG9tIiwidG9wIiwiY2xlYXJUaW1lb3V0IiwicmVzaXplVGltZW91dCIsInNldFRpbWVvdXQiLCJvbkRlYm91bmNlZFJlc2l6ZSIsImlzU2FtZUxlbmd0aCIsImlzU2FtZUNvbHVtbnMiLCJldmVudCIsInRhcmdldCIsImRlc3Ryb3kiLCJyZW1vdmVFdmVudExpc3RlbmVyIiwib25SZWFkeSIsInJlYWR5U3RhdGUiLCJkb2NSZWFkeSIsImRhdGEiLCJpZCIsIm1ha2VKUXVlcnlQbHVnaW4iLCIkIiwialF1ZXJ5IiwiZm4iLCJjb2xjYWRlIiwiYXJnMCIsIiRlbGVtcyIsIm1ldGhvZE5hbWUiLCJhcmdzIiwicmV0dXJuVmFsdWUiLCJlYWNoIiwidW5kZWZpbmVkIiwibWV0aG9kQ2FsbCIsInNsaWNlIiwiY2FsbCIsImFyZ3VtZW50cyIsInBsYWluQ2FsbCJdLCJtYXBwaW5ncyI6IkNBU0UsU0FBVUEsRUFBUUMsR0FJTSxtQkFBVkMsUUFBd0JBLE9BQU9DLElBRXZDRCxPQUFRRCxHQUNpQixpQkFBVkcsUUFBc0JBLE9BQU9DLFFBRTVDRCxPQUFPQyxRQUFVSixJQUdqQkQsRUFBT00sUUFBVUwsSUFaekIsQ0FlR0QsT0FBUSxXQUlQLFNBQVNNLEVBQVNDLEVBQVNDLEdBSXZCLElBSEFELEVBQVVFLEVBQWlCRixLQUdYQSxFQUFRRyxZQUFjLENBQ2xDLElBQUlDLEVBQVdDLEVBQVdMLEVBQVFHLGFBRWxDLE9BREFDLEVBQVNFLE9BQVFMLEdBQ1ZHLEVBR1hHLEtBQUtQLFFBQVVBLEVBRWZPLEtBQUtOLFFBQVUsR0FD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LEVBVWhCLFNBQXFCQyxFQUFRQyxFQUFZQyxHQUNyQyxJQUFJQyxFQVlKLE9BWEFILEVBQU9JLEtBQU0sU0FBVXBGLEVBQUdoQixHQUV0QixJQUFJOEYsRUFBVUgsRUFBRUgsS0FBTXhGLEVBQU0sV0FDNUIsR0FBTThGLEVBQU4sQ0FJQSxJQUFJckYsRUFBUXFGLEVBQVNHLEdBQWExQyxNQUFPdUMsRUFBU0ksR0FFbERDLE9BQThCRSxJQUFoQkYsRUFBNEIxRixFQUFRMEYsVUFFL0JFLElBQWhCRixFQUE0QkEsRUFBY0gsRUFwQnRDTSxDQUFZaEgsS0FBTXlHLEVBRGRsRixNQUFNcEIsVUFBVThHLE1BQU1DLEtBQU1DLFVBQVcsS0F3QjFELFNBQW9CVCxFQUFRaEgsR0FDeEJnSCxFQUFPSSxLQUFNLFNBQVVwRixFQUFHaEIsR0FDdEIsSUFBSThGLEVBQVVILEVBQUVILEtBQU14RixFQUFNLFdBQ3ZCOEYsR0FFREEsRUFBUXpHLE9BQVFMLEdBQ2hCOEcsRUFBUXZELFdBR1J1RCxFQUFVLElBQUloSCxFQUFTa0IsRUFBTWhCLEdBQzdCMkcsRUFBRUgsS0FBTXhGLEVBQU0sVUFBVzhGLE1BOUJqQ1ksQ0FBV3BILEtBQU15RyxHQUNWekcsU0FvQ2ZSLEVBQVE0RyxtQkFxREQ1RyIsImZpbGUiOiJjb2xjYWRlLmpzIiwic291cmNlc0NvbnRlbnQiOlsiLyohXG4gKiBDb2xjYWRlIHYwLjIuMFxuICogTGlnaHR3ZWlnaHQgbWFzb25yeSBsYXlvdXRcbiAqIGJ5IERhdmlkIERlU2FuZHJvXG4gKiBNSVQgbGljZW5zZVxuICovXG5cbi8qanNoaW50IGJyb3dzZXI6IHRydWUsIHVuZGVmOiB0cnVlLCB1bnVzZWQ6IHRydWUgKi9cblxuKCBmdW5jdGlvbiggd2luZG93LCBmYWN0b3J5ICkge1xuICAgIC8vIHVuaXZlcnNhbCBtb2R1bGUgZGVmaW5pdGlvblxuICAgIC8qanNoaW50IHN0cmljdDogZmFsc2UgKi9cbiAgICAvKmdsb2JhbCBkZWZpbmU6IGZhbHNlLCBtb2R1bGU6IGZhbHNlICovXG4gICAgaWYgKCB0eXBlb2YgZGVmaW5lID09ICdmdW5jdGlvbicgJiYgZGVmaW5lLmFtZCApIHtcbiAgICAgICAgLy8gQU1EXG4gICAgICAgIGRlZmluZSggZmFjdG9yeSApO1xuICAgIH0gZWxzZSBpZiAoIHR5cGVvZiBtb2R1bGUgPT0gJ29iamVjdCcgJiYgbW9kdWxlLmV4cG9ydHMgKSB7XG4gICAgICAgIC8vIENvbW1vbkpTXG4gICAgICAgIG1vZHVsZS5leHBvcnRzID0gZmFjdG9yeSgpO1xuICAgIH0gZWxzZSB7XG4gICAgICAgIC8vIGJyb3dzZXIgZ2xvYmFsXG4gICAgICAgIHdpbmRvdy5Db2xjYWRlID0gZmFjdG9yeSgpO1xuICAgIH1cblxufSggd2luZG93LCBmdW5jdGlvbiBmYWN0b3J5KCkge1xuXG4vLyAtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLSBDb2xjYWRlIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tIC8vXG5cbiAgICBmdW5jdGlvbiBDb2xjYWRlKCBlbGVtZW50LCBvcHRpb25zICkge1xuICAgICAgICBlbGVtZW50ID0gZ2V0UXVlcnlFbGVtZW50KCBlbGVtZW50ICk7XG5cbiAgICAgICAgLy8gZG8gbm90IGluaXRpYWxpemUgdHdpY2Ugb24gc2FtZSBlbGVtZW50XG4gICAgICAgIGlmICggZWxlbWVudCAmJiBlbGVtZW50LmNvbGNhZGVHVUlEICkge1xuICAgICAgICAgICAgdmFyIGluc3RhbmNlID0gaW5zdGFuY2VzWyBlbGVtZW50LmNvbGNhZGVHVUlEIF07XG4gICAgICAgICAgICBpbnN0YW5jZS5vcHRpb24oIG9wdGlvbnMgKTtcbiAgICAgICAgICAgIHJldHVybiBpbnN0YW5jZTtcbiAgICAgICAgfVxuXG4gICAgICAgIHRoaXMuZWxlbWVudCA9IGVsZW1lbnQ7XG4gICAgICAgIC8vIG9wdGlvbnNcbiAgICAgICAgdGhpcy5vcHRpb25zID0ge307XG4gICAgICAgIHRoaXMub3B0aW9uKCBvcHRpb25zICk7XG4gICAgICAgIC8vIGtpY2sgdGhpbmdzIG9mZlxuICAgICAgICB0aGlzLmNyZWF0ZSgpO1xuICAgIH1cblxuICAgIHZhciBwcm90byA9IENvbGNhZGUucHJvdG90eXBlO1xuXG4gICAgcHJvdG8ub3B0aW9uID0gZnVuY3Rpb24oIG9wdGlvbnMgKSB7XG4gICAgICAgIHRoaXMub3B0aW9ucyA9IGV4dGVuZCggdGhpcy5vcHRpb25zLCBvcHRpb25zICk7XG4gICAgfTtcblxuLy8gZ2xvYmFsbHkgdW5pcXVlIGlkZW50aWZpZXJzXG4gICAgdmFyIEdVSUQgPSAwO1xuLy8gaW50ZXJuYWwgc3RvcmUgb2YgYWxsIENvbGNhZGUgaW50YW5jZXNcbiAgICB2YXIgaW5zdGFuY2VzID0ge307XG5cbiAgICBwcm90by5jcmVhdGUgPSBmdW5jdGlvbigpIHtcbiAgICAgICAgdGhpcy5lcnJvckNoZWNrKCk7XG4gICAgICAgIC8vIGFkZCBndWlkIGZvciBDb2xjYWRlLmRhdGFcbiAgICAgICAgdmFyIGd1aWQgPSB0aGlzLmd1aWQgPSArK0dVSUQ7XG4gICAgICAgIHRoaXMuZWxlbWVudC5jb2xjYWRlR1VJRCA9IGd1aWQ7XG4gICAgICAgIGluc3RhbmNlc1sgZ3VpZCBdID0gdGhpczsgLy8gYXNzb2NpYXRlIHZpYSBpZFxuICAgICAgICAvLyB1cGRhdGUgaW5pdGlhbCBwcm9wZXJ0aWVzICYgbGF5b3V0XG4gICAgICAgIHRoaXMucmVsb2FkKCk7XG4gICAgICAgIC8vIGV2ZW50c1xuICAgICAgICB0aGlzLl93aW5kb3dSZXNpemVIYW5kbGVyID0gdGhpcy5vbldpbmRvd1Jlc2l6ZS5iaW5kKCB0aGlzICk7XG4gICAgICAgIHRoaXMuX2xvYWRIYW5kbGVyID0gdGhpcy5vbkxvYWQuYmluZCggdGhpcyApO1xuICAgICAgICB3aW5kb3cuYWRkRXZlbnRMaXN0ZW5lciggJ3Jlc2l6ZScsIHRoaXMuX3dpbmRvd1Jlc2l6ZUhhbmRsZXIgKTtcbiAgICAgICAgdGhpcy5lbGVtZW50LmFkZEV2ZW50TGlzdGVuZXIoICdsb2FkJywgdGhpcy5fbG9hZEhhbmRsZXIsIHRydWUgKTtcbiAgICB9O1xuXG4gICAgcHJvdG8uZXJyb3JDaGVjayA9IGZ1bmN0aW9uKCkge1xuICAgICAgICB2YXIgZXJyb3JzID0gW107XG4gICAgICAgIGlmICggIXRoaXMuZWxlbWVudCApIHtcbiAgICAgICAgICAgIGVycm9ycy5wdXNoKCAnQmFkIGVsZW1lbnQ6ICcgKyB0aGlzLmVsZW1lbnQgKTtcbiAgICAgICAgfVxuICAgICAgICBpZiAoICF0aGlzLm9wdGlvbnMuY29sdW1ucyApIHtcbiAgICAgICAgICAgIGVycm9ycy5wdXNoKCAnY29sdW1ucyBvcHRpb24gcmVxdWlyZWQ6ICcgKyB0aGlzLm9wdGlvbnMuY29sdW1ucyApO1xuICAgICAgICB9XG4gICAgICAgIGlmICggIXRoaXMub3B0aW9ucy5pdGVtcyApIHtcbiAgICAgICAgICAgIGVycm9ycy5wdXNoKCAnaXRlbXMgb3B0aW9uIHJlcXVpcmVkOiAnICsgdGhpcy5vcHRpb25zLml0ZW1zICk7XG4gICAgICAgIH1cblxuICAgICAgICBpZiAoIGVycm9ycy5sZW5ndGggKSB7XG4gICAgICAgICAgICB0aHJvdyBuZXcgRXJyb3IoICdbQ29sY2FkZSBlcnJvcl0gJyArIGVycm9ycy5qb2luKCcuICcpICk7XG4gICAgICAgIH1cbiAgICB9O1xuXG4vLyB1cGRhdGUgcHJvcGVydGllcyBhbmQgZG8gbGF5b3V0XG4gICAgcHJvdG8ucmVsb2FkID0gZnVuY3Rpb24oKSB7XG4gICAgICAgIHRoaXMudXBkYXRlQ29sdW1ucygpO1xuICAgICAgICB0aGlzLnVwZGF0ZUl0ZW1zKCk7XG4gICAgICAgIHRoaXMubGF5b3V0KCk7XG4gICAgfTtcblxuICAgIHByb3RvLnVwZGF0ZUNvbHVtbnMgPSBmdW5jdGlvbigpIHtcbiAgICAgICAgdGhpcy5jb2x1bW5zID0gcXVlcnlTZWxlY3QoIHRoaXMub3B0aW9ucy5jb2x1bW5zLCB0aGlzLmVsZW1lbnQgKTtcbiAgICB9O1xuXG4gICAgcHJvdG8udXBkYXRlSXRlbXMgPSBmdW5jdGlvbigpIHtcbiAgICAgICAgdGhpcy5pdGVtcyA9IHF1ZXJ5U2VsZWN0KCB0aGlzLm9wdGlvbnMuaXRlbXMsIHRoaXMuZWxlbWVudCApO1xuICAgIH07XG5cbiAgICBwcm90by5nZXRBY3RpdmVDb2x1bW5zID0gZnVuY3Rpb24oKSB7XG4gICAgICAgIHJldHVybiB0aGlzLmNvbHVtbnMuZmlsdGVyKCBmdW5jdGlvbiggY29sdW1uICkge1xuICAgICAgICAgICAgdmFyIHN0eWxlID0gZ2V0Q29tcHV0ZWRTdHlsZSggY29sdW1uICk7XG4gICAgICAgICAgICByZXR1cm4gc3R5bGUuZGlzcGxheSAhPSAnbm9uZSc7XG4gICAgICAgIH0pO1xuICAgIH07XG5cbi8vIC0tLS0tIGxheW91dCAtLS0tLSAvL1xuXG4vLyBwdWJsaWMsIHVwZGF0ZXMgYWN0aXZlQ29sdW1uc1xuICAgIHByb3RvLmxheW91dCA9IGZ1bmN0aW9uKCkge1xuICAgICAgICB0aGlzLmFjdGl2ZUNvbHVtbnMgPSB0aGlzLmdldEFjdGl2ZUNvbHVtbnMoKTtcbiAgICAgICAgdGhpcy5fbGF5b3V0KCk7XG4gICAgfTtcblxuLy8gcHJpdmF0ZSwgZG9lcyBub3QgdXBkYXRlIGFjdGl2ZUNvbHVtbnNcbiAgICBwcm90by5fbGF5b3V0ID0gZnVuY3Rpb24oKSB7XG4gICAgICAgIC8vIHJlc2V0IGNvbHVtbiBoZWlnaHRzXG4gICAgICAgIHRoaXMuY29sdW1uSGVpZ2h0cyA9IHRoaXMuYWN0aXZlQ29sdW1ucy5tYXAoIGZ1bmN0aW9uKCkge1xuICAgICAgICAgICAgcmV0dXJuIDA7XG4gICAgICAgIH0pO1xuICAgICAgICAvLyBsYXlvdXQgYWxsIGl0ZW1zXG4gICAgICAgIHRoaXMubGF5b3V0SXRlbXMoIHRoaXMuaXRlbXMgKTtcbiAgICB9O1xuXG4gICAgcHJvdG8ubGF5b3V0SXRlbXMgPSBmdW5jdGlvbiggaXRlbXMgKSB7XG4gICAgICAgIGl0ZW1zLmZvckVhY2goIHRoaXMubGF5b3V0SXRlbSwgdGhpcyApO1xuICAgIH07XG5cbiAgICBwcm90by5sYXlvdXRJdGVtID0gZnVuY3Rpb24oIGl0ZW0gKSB7XG4gICAgICAgIC8vIGxheW91dCBpdGVtIGJ5IGFwcGVuZGluZyB0byBjb2x1bW5cbiAgICAgICAgdmFyIG1pbkhlaWdodCA9IE1hdGgubWluLmFwcGx5KCBNYXRoLCB0aGlzLmNvbHVtbkhlaWdodHMgKTtcbiAgICAgICAgdmFyIGluZGV4ID0gdGhpcy5jb2x1bW5IZWlnaHRzLmluZGV4T2YoIG1pbkhlaWdodCApO1xuICAgICAgICB0aGlzLmFjdGl2ZUNvbHVtbnNbIGluZGV4IF0uYXBwZW5kQ2hpbGQoIGl0ZW0gKTtcbiAgICAgICAgLy8gYXQgbGVhc3QgMXB4LCBpZiBpdGVtIGhhc24ndCBsb2FkZWRcbiAgICAgICAgLy8gTm90IGV4YWN0bHkgYWNjdXJhdGUsIGJ1dCBpdCdzIGNvb2xcbiAgICAgICAgdGhpcy5jb2x1bW5IZWlnaHRzWyBpbmRleCBdICs9IGl0ZW0ub2Zmc2V0SGVpZ2h0IHx8IDE7XG4gICAgfTtcblxuLy8gLS0tLS0gYWRkaW5nIGl0ZW1zIC0tLS0tIC8vXG5cbiAgICBwcm90by5hcHBlbmQgPSBmdW5jdGlvbiggZWxlbXMgKSB7XG4gICAgICAgIHZhciBpdGVtcyA9IHRoaXMuZ2V0UXVlcnlJdGVtcyggZWxlbXMgKTtcbiAgICAgICAgLy8gYWRkIGl0ZW1zIHRvIGNvbGxlY3Rpb25cbiAgICAgICAgdGhpcy5pdGVtcyA9IHRoaXMuaXRlbXMuY29uY2F0KCBpdGVtcyApO1xuICAgICAgICAvLyBsYXkgdGhlbSBvdXRcbiAgICAgICAgdGhpcy5sYXlvdXRJdGVtcyggaXRlbXMgKTtcbiAgICB9O1xuXG4gICAgcHJvdG8ucHJlcGVuZCA9IGZ1bmN0aW9uKCBlbGVtcyApIHtcbiAgICAgICAgdmFyIGl0ZW1zID0gdGhpcy5nZXRRdWVyeUl0ZW1zKCBlbGVtcyApO1xuICAgICAgICAvLyBhZGQgaXRlbXMgdG8gY29sbGVjdGlvblxuICAgICAgICB0aGlzLml0ZW1zID0gaXRlbXMuY29uY2F0KCB0aGlzLml0ZW1zICk7XG4gICAgICAgIC8vIGxheSBvdXQgZXZlcnl0aGluZ1xuICAgICAgICB0aGlzLl9sYXlvdXQoKTtcbiAgICB9O1xuXG4gICAgcHJvdG8uZ2V0UXVlcnlJdGVtcyA9IGZ1bmN0aW9uKCBlbGVtcyApIHtcbiAgICAgICAgZWxlbXMgPSBtYWtlQXJyYXkoIGVsZW1zICk7XG4gICAgICAgIHZhciBmcmFnbWVudCA9IGRvY3VtZW50LmNyZWF0ZURvY3VtZW50RnJhZ21lbnQoKTtcbiAgICAgICAgZWxlbXMuZm9yRWFjaCggZnVuY3Rpb24oIGVsZW0gKSB7XG4gICAgICAgICAgICBmcmFnbWVudC5hcHBlbmRDaGlsZCggZWxlbSApO1xuICAgICAgICB9KTtcbiAgICAgICAgcmV0dXJuIHF1ZXJ5U2VsZWN0KCB0aGlzLm9wdGlvbnMuaXRlbXMsIGZyYWdtZW50ICk7XG4gICAgfTtcblxuLy8gLS0tLS0gbWVhc3VyZSBjb2x1bW4gaGVpZ2h0IC0tLS0tIC8vXG5cbiAgICBwcm90by5tZWFzdXJlQ29sdW1uSGVpZ2h0ID0gZnVuY3Rpb24oIGVsZW0gKSB7XG4gICAgICAgIHZhciBib3VuZGluZ1JlY3QgPSB0aGlzLmVsZW1lbnQuZ2V0Qm91bmRpbmdDbGllbnRSZWN0KCk7XG4gICAgICAgIHRoaXMuYWN0aXZlQ29sdW1ucy5mb3JFYWNoKCBmdW5jdGlvbiggY29sdW1uLCBpICkge1xuICAgICAgICAgICAgLy8gaWYgZWxlbSwgbWVhc3VyZSBvbmx5IHRoYXQgY29sdW1uXG4gICAgICAgICAgICAvLyBpZiBubyBlbGVtLCBtZWFzdXJlIGFsbCBjb2x1bW5zXG4gICAgICAgICAgICBpZiAoICFlbGVtIHx8IGNvbHVtbi5jb250YWlucyggZWxlbSApICkge1xuICAgICAgICAgICAgICAgIHZhciBsYXN0Q2hpbGRSZWN0ID0gY29sdW1uLmxhc3RFbGVtZW50Q2hpbGQuZ2V0Qm91bmRpbmdDbGllbnRSZWN0KCk7XG4gICAgICAgICAgICAgICAgLy8gbm90IGFuIGV4YWN0IGNhbGN1bGF0aW9uIGFzIGl0IGluY2x1ZGVzIHRvcCBib3JkZXIsIGFuZCBleGNsdWRlcyBpdGVtIGJvdHRvbSBtYXJnaW5cbiAgICAgICAgICAgICAgICB0aGlzLmNvbHVtbkhlaWdodHNbIGkgXSA9IGxhc3RDaGlsZFJlY3QuYm90dG9tIC0gYm91bmRpbmdSZWN0LnRvcDtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfSwgdGhpcyApO1xuICAgIH07XG5cbi8vIC0tLS0tIGV2ZW50cyAtLS0tLSAvL1xuXG4gICAgcHJvdG8ub25XaW5kb3dSZXNpemUgPSBmdW5jdGlvbigpIHtcbiAgICAgICAgY2xlYXJUaW1lb3V0KCB0aGlzLnJlc2l6ZVRpbWVvdXQgKTtcbiAgICAgICAgdGhpcy5yZXNpemVUaW1lb3V0ID0gc2V0VGltZW91dCggZnVuY3Rpb24oKSB7XG4gICAgICAgICAgICB0aGlzLm9uRGVib3VuY2VkUmVzaXplKCk7XG4gICAgICAgIH0uYmluZCggdGhpcyApLCAxMDAgKTtcbiAgICB9O1xuXG4gICAgcHJvdG8ub25EZWJvdW5jZWRSZXNpemUgPSBmdW5jdGlvbigpIHtcbiAgICAgICAgdmFyIGFjdGl2ZUNvbHVtbnMgPSB0aGlzLmdldEFjdGl2ZUNvbHVtbnMoKTtcbiAgICAgICAgLy8gY2hlY2sgaWYgY29sdW1ucyBjaGFuZ2VkXG4gICAgICAgIHZhciBpc1NhbWVMZW5ndGggPSBhY3RpdmVDb2x1bW5zLmxlbmd0aCA9PSB0aGlzLmFjdGl2ZUNvbHVtbnMubGVuZ3RoO1xuICAgICAgICB2YXIgaXNTYW1lQ29sdW1ucyA9IHRydWU7XG4gICAgICAgIHRoaXMuYWN0aXZlQ29sdW1ucy5mb3JFYWNoKCBmdW5jdGlvbiggY29sdW1uLCBpICkge1xuICAgICAgICAgICAgaXNTYW1lQ29sdW1ucyA9IGlzU2FtZUNvbHVtbnMgJiYgY29sdW1uID09IGFjdGl2ZUNvbHVtbnNbaV07XG4gICAgICAgIH0pO1xuICAgICAgICBpZiAoIGlzU2FtZUxlbmd0aCAmJiBpc1NhbWVDb2x1bW5zICkge1xuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG4gICAgICAgIC8vIGFjdGl2ZUNvbHVtbnMgY2hhbmdlZFxuICAgICAgICB0aGlzLmFjdGl2ZUNvbHVtbnMgPSBhY3RpdmVDb2x1bW5zO1xuICAgICAgICB0aGlzLl9sYXlvdXQoKTtcbiAgICB9O1xuXG4gICAgcHJvdG8ub25Mb2FkID0gZnVuY3Rpb24oIGV2ZW50ICkge1xuICAgICAgICB0aGlzLm1lYXN1cmVDb2x1bW5IZWlnaHQoIGV2ZW50LnRhcmdldCApO1xuICAgIH07XG5cbi8vIC0tLS0tIGRlc3Ryb3kgLS0tLS0gLy9cblxuICAgIHByb3RvLmRlc3Ryb3kgPSBmdW5jdGlvbigpIHtcbiAgICAgICAgLy8gbW92ZSBpdGVtcyBiYWNrIHRvIGNvbnRhaW5lclxuICAgICAgICB0aGlzLml0ZW1zLmZvckVhY2goIGZ1bmN0aW9uKCBpdGVtICkge1xuICAgICAgICAgICAgdGhpcy5lbGVtZW50LmFwcGVuZENoaWxkKCBpdGVtICk7XG4gICAgICAgIH0sIHRoaXMgKTtcbiAgICAgICAgLy8gcmVtb3ZlIGV2ZW50c1xuICAgICAgICB3aW5kb3cucmVtb3ZlRXZlbnRMaXN0ZW5lciggJ3Jlc2l6ZScsIHRoaXMuX3dpbmRvd1Jlc2l6ZUhhbmRsZXIgKTtcbiAgICAgICAgdGhpcy5lbGVtZW50LnJlbW92ZUV2ZW50TGlzdGVuZXIoICdsb2FkJywgdGhpcy5fbG9hZEhhbmRsZXIsIHRydWUgKTtcbiAgICAgICAgLy8gcmVtb3ZlIGRhdGFcbiAgICAgICAgZGVsZXRlIHRoaXMuZWxlbWVudC5jb2xjYWRlR1VJRDtcbiAgICAgICAgZGVsZXRlIGluc3RhbmNlc1sgdGhpcy5ndWlkIF07XG4gICAgfTtcblxuLy8gLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0gSFRNTCBpbml0IC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tIC8vXG5cbiAgICBkb2NSZWFkeSggZnVuY3Rpb24oKSB7XG4gICAgICAgIHZhciBkYXRhRWxlbXMgPSBxdWVyeVNlbGVjdCgnW2RhdGEtY29sY2FkZV0nKTtcbiAgICAgICAgZGF0YUVsZW1zLmZvckVhY2goIGh0bWxJbml0ICk7XG4gICAgfSk7XG5cbiAgICBmdW5jdGlvbiBodG1sSW5pdCggZWxlbSApIHtcbiAgICAgICAgLy8gY29udmVydCBhdHRyaWJ1dGUgXCJmb286IGJhciwgcXV4OiBiYXpcIiBpbnRvIG9iamVjdFxuICAgICAgICB2YXIgYXR0ciA9IGVsZW0uZ2V0QXR0cmlidXRlKCdkYXRhLWNvbGNhZGUnKTtcbiAgICAgICAgdmFyIGF0dHJQYXJ0cyA9IGF0dHIuc3BsaXQoJywnKTtcbiAgICAgICAgdmFyIG9wdGlvbnMgPSB7fTtcbiAgICAgICAgYXR0clBhcnRzLmZvckVhY2goIGZ1bmN0aW9uKCBwYXJ0ICkge1xuICAgICAgICAgICAgdmFyIHBhaXIgPSBwYXJ0LnNwbGl0KCc6Jyk7XG4gICAgICAgICAgICB2YXIga2V5ID0gcGFpclswXS50cmltKCk7XG4gICAgICAgICAgICB2YXIgdmFsdWUgPSBwYWlyWzFdLnRyaW0oKTtcbiAgICAgICAgICAgIG9wdGlvbnNbIGtleSBdID0gdmFsdWU7XG4gICAgICAgIH0pO1xuXG4gICAgICAgIG5ldyBDb2xjYWRlKCBlbGVtLCBvcHRpb25zICk7XG4gICAgfVxuXG4gICAgQ29sY2FkZS5kYXRhID0gZnVuY3Rpb24oIGVsZW0gKSB7XG4gICAgICAgIGVsZW0gPSBnZXRRdWVyeUVsZW1lbnQoIGVsZW0gKTtcbiAgICAgICAgdmFyIGlkID0gZWxlbSAmJiBlbGVtLmNvbGNhZGVHVUlEO1xuICAgICAgICByZXR1cm4gaWQgJiYgaW5zdGFuY2VzWyBpZCBdO1xuICAgIH07XG5cbi8vIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tIGpRdWVyeSAtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLSAvL1xuXG4gICAgQ29sY2FkZS5tYWtlSlF1ZXJ5UGx1Z2luID0gZnVuY3Rpb24oICQgKSB7XG4gICAgICAgICQgPSAkIHx8IHdpbmRvdy5qUXVlcnk7XG4gICAgICAgIGlmICggISQgKSB7XG4gICAgICAgICAgICByZXR1cm47XG4gICAgICAgIH1cblxuICAgICAgICAkLmZuLmNvbGNhZGUgPSBmdW5jdGlvbiggYXJnMCAvKiwgYXJnMSAqLykge1xuICAgICAgICAgICAgLy8gbWV0aG9kIGNhbGwgJCgpLmNvbGNhZGUoICdtZXRob2QnLCB7IG9wdGlvbnMgfSApXG4gICAgICAgICAgICBpZiAoIHR5cGVvZiBhcmcwID09ICdzdHJpbmcnICkge1xuICAgICAgICAgICAgICAgIC8vIHNoaWZ0IGFyZ3VtZW50cyBieSAxXG4gICAgICAgICAgICAgICAgdmFyIGFyZ3MgPSBBcnJheS5wcm90b3R5cGUuc2xpY2UuY2FsbCggYXJndW1lbnRzLCAxICk7XG4gICAgICAgICAgICAgICAgcmV0dXJuIG1ldGhvZENhbGwoIHRoaXMsIGFyZzAsIGFyZ3MgKTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgICAgIC8vIGp1c3QgJCgpLmNvbGNhZGUoeyBvcHRpb25zIH0pXG4gICAgICAgICAgICBwbGFpbkNhbGwoIHRoaXMsIGFyZzAgKTtcbiAgICAgICAgICAgIHJldHVybiB0aGlzO1xuICAgICAgICB9O1xuXG4gICAgICAgIGZ1bmN0aW9uIG1ldGhvZENhbGwoICRlbGVtcywgbWV0aG9kTmFtZSwgYXJncyApIHtcbiAgICAgICAgICAgIHZhciByZXR1cm5WYWx1ZTtcbiAgICAgICAgICAgICRlbGVtcy5lYWNoKCBmdW5jdGlvbiggaSwgZWxlbSApIHtcbiAgICAgICAgICAgICAgICAvLyBnZXQgaW5zdGFuY2VcbiAgICAgICAgICAgICAgICB2YXIgY29sY2FkZSA9ICQuZGF0YSggZWxlbSwgJ2NvbGNhZGUnICk7XG4gICAgICAgICAgICAgICAgaWYgKCAhY29sY2FkZSApIHtcbiAgICAgICAgICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAvLyBhcHBseSBtZXRob2QsIGdldCByZXR1cm4gdmFsdWVcbiAgICAgICAgICAgICAgICB2YXIgdmFsdWUgPSBjb2xjYWRlWyBtZXRob2ROYW1lIF0uYXBwbHkoIGNvbGNhZGUsIGFyZ3MgKTtcbiAgICAgICAgICAgICAgICAvLyBzZXQgcmV0dXJuIHZhbHVlIGlmIHZhbHVlIGlzIHJldHVybmVkLCB1c2Ugb25seSBmaXJzdCB2YWx1ZVxuICAgICAgICAgICAgICAgIHJldHVyblZhbHVlID0gcmV0dXJuVmFsdWUgPT09IHVuZGVmaW5lZCA/IHZhbHVlIDogcmV0dXJuVmFsdWU7XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgICAgIHJldHVybiByZXR1cm5WYWx1ZSAhPT0gdW5kZWZpbmVkID8gcmV0dXJuVmFsdWUgOiAkZWxlbXM7XG4gICAgICAgIH1cblxuICAgICAgICBmdW5jdGlvbiBwbGFpbkNhbGwoICRlbGVtcywgb3B0aW9ucyApIHtcbiAgICAgICAgICAgICRlbGVtcy5lYWNoKCBmdW5jdGlvbiggaSwgZWxlbSApIHtcbiAgICAgICAgICAgICAgICB2YXIgY29sY2FkZSA9ICQuZGF0YSggZWxlbSwgJ2NvbGNhZGUnICk7XG4gICAgICAgICAgICAgICAgaWYgKCBjb2xjYWRlICkge1xuICAgICAgICAgICAgICAgICAgICAvLyBzZXQgb3B0aW9ucyAmIGluaXRcbiAgICAgICAgICAgICAgICAgICAgY29sY2FkZS5vcHRpb24oIG9wdGlvbnMgKTtcbiAgICAgICAgICAgICAgICAgICAgY29sY2FkZS5sYXlvdXQoKTtcbiAgICAgICAgICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgICAgICAgICAvLyBpbml0aWFsaXplIG5ldyBpbnN0YW5jZVxuICAgICAgICAgICAgICAgICAgICBjb2xjYWRlID0gbmV3IENvbGNhZGUoIGVsZW0sIG9wdGlvbnMgKTtcbiAgICAgICAgICAgICAgICAgICAgJC5kYXRhKCBlbGVtLCAnY29sY2FkZScsIGNvbGNhZGUgKTtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfVxuICAgIH07XG5cbi8vIHRyeSBtYWtpbmcgcGx1Z2luXG4gICAgQ29sY2FkZS5tYWtlSlF1ZXJ5UGx1Z2luKCk7XG5cbi8vIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tIHV0aWxzIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tIC8vXG5cbiAgICBmdW5jdGlvbiBleHRlbmQoIGEsIGIgKSB7XG4gICAgICAgIGZvciAoIHZhciBwcm9wIGluIGIgKSB7XG4gICAgICAgICAgICBhWyBwcm9wIF0gPSBiWyBwcm9wIF07XG4gICAgICAgIH1cbiAgICAgICAgcmV0dXJuIGE7XG4gICAgfVxuXG4vLyB0dXJuIGVsZW1lbnQgb3Igbm9kZUxpc3QgaW50byBhbiBhcnJheVxuICAgIGZ1bmN0aW9uIG1ha2VBcnJheSggb2JqICkge1xuICAgICAgICB2YXIgYXJ5ID0gW107XG4gICAgICAgIGlmICggQXJyYXkuaXNBcnJheSggb2JqICkgKSB7XG4gICAgICAgICAgICAvLyB1c2Ugb2JqZWN0IGlmIGFscmVhZHkgYW4gYXJyYXlcbiAgICAgICAgICAgIGFyeSA9IG9iajtcbiAgICAgICAgfSBlbHNlIGlmICggb2JqICYmIHR5cGVvZiBvYmoubGVuZ3RoID09ICdudW1iZXInICkge1xuICAgICAgICAgICAgLy8gY29udmVydCBub2RlTGlzdCB0byBhcnJheVxuICAgICAgICAgICAgZm9yICggdmFyIGk9MDsgaSA8IG9iai5sZW5ndGg7IGkrKyApIHtcbiAgICAgICAgICAgICAgICBhcnkucHVzaCggb2JqW2ldICk7XG4gICAgICAgICAgICB9XG4gICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAvLyBhcnJheSBvZiBzaW5nbGUgaW5kZXhcbiAgICAgICAgICAgIGFyeS5wdXNoKCBvYmogKTtcbiAgICAgICAgfVxuICAgICAgICByZXR1cm4gYXJ5O1xuICAgIH1cblxuLy8gZ2V0IGFycmF5IG9mIGVsZW1lbnRzXG4gICAgZnVuY3Rpb24gcXVlcnlTZWxlY3QoIHNlbGVjdG9yLCBlbGVtICkge1xuICAgICAgICBlbGVtID0gZWxlbSB8fCBkb2N1bWVudDtcbiAgICAgICAgdmFyIGVsZW1zID0gZWxlbS5xdWVyeVNlbGVjdG9yQWxsKCBzZWxlY3RvciApO1xuICAgICAgICByZXR1cm4gbWFrZUFycmF5KCBlbGVtcyApO1xuICAgIH1cblxuICAgIGZ1bmN0aW9uIGdldFF1ZXJ5RWxlbWVudCggZWxlbSApIHtcbiAgICAgICAgaWYgKCB0eXBlb2YgZWxlbSA9PSAnc3RyaW5nJyApIHtcbiAgICAgICAgICAgIGVsZW0gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCBlbGVtICk7XG4gICAgICAgIH1cbiAgICAgICAgcmV0dXJuIGVsZW07XG4gICAgfVxuXG4gICAgZnVuY3Rpb24gZG9jUmVhZHkoIG9uUmVhZHkgKSB7XG4gICAgICAgIGlmICggZG9jdW1lbnQucmVhZHlTdGF0ZSA9PSAnY29tcGxldGUnICkge1xuICAgICAgICAgICAgb25SZWFkeSgpO1xuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG4gICAgICAgIGRvY3VtZW50LmFkZEV2ZW50TGlzdGVuZXIoICdET01Db250ZW50TG9hZGVkJywgb25SZWFkeSApO1xuICAgIH1cblxuLy8gLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0gZW5kIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tIC8vXG5cbiAgICByZXR1cm4gQ29sY2FkZTtcblxufSkpOyJdfQ==
