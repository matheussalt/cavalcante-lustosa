function animacoes(){document.querySelectorAll("[data-animar]").forEach(e=>{if(e.getBoundingClientRect().top<window.innerHeight)return e.classList.add("animar");window.addEventListener("scroll",n=>{const t=.85*window.innerHeight;e.getBoundingClientRect().top<t&&e.classList.add("animar")})});const e=document.querySelectorAll("[data-anima-tempo]");window.setTimeout(()=>{e.forEach(e=>{e.classList.add("animar")})},500)}function sliderDermato(){const e=document.querySelector(".prox"),n=document.querySelector(".ant"),t=document.querySelectorAll(".home-noticia");let o=1,a=2;if(!e||!n||!t)return null;function i(){const e=[o,a];t.forEach((n,t)=>{e.forEach(e=>{n.classList.remove(`cardPosition${e}`)}),n.classList.add(`cardPosition${e[t]}`)})}i(),e.addEventListener("click",function(e){e.preventDefault(),o=1!==o?o-1:2,a=1!==a?a-1:2,i()}),n.addEventListener("click",function(e){e.preventDefault(),o=2!==o?o+1:1,a=2!==a?a+1:1,i()})}function openMenu(){const e=document.querySelector(".header-wrapper"),n=document.querySelector(".menu-hamb"),t=document.querySelector(".close-menu");document.querySelector("body");if(!e||!n)return null;n.addEventListener("click",o=>{o.preventDefault(),e.classList.toggle("ativo"),n.classList.toggle("ativo"),t.addEventListener("click",n=>{e.classList.remove("ativo"),t.classList.remove("ativo")})})}function modal(){const e=document.querySelectorAll("[data-modal]"),n=document.querySelector("#modal"),t=document.querySelector("body");if(!e)return null;e.forEach(e=>{e.addEventListener("click",o=>{o.preventDefault(),t.style.setProperty("overflow-y","hidden"),n.classList.add("ativo");const a=document.createElement("div");s,a.innerHTML=`\n        <img src="${e.getAttribute("src")}" alt="${e.getAttribute("alt")}" />\n      `;const i=document.createElement("button");i.innerText="x",i.addEventListener("click",e=>{e.preventDefault(),t.style.setProperty("overflow-y","scroll"),n.classList.remove("ativo"),n.innerHTML=""}),a.appendChild(i),n.appendChild(a),n.addEventListener("click",e=>{e.target===e.currentTarget&&(t.style.setProperty("overflow-y","scroll"),n.classList.remove("ativo"),n.innerHTML="")})})})}animacoes(),sliderDermato(),openMenu(),modal(),function(e,n,t){function o(e,n){return typeof e===n}function a(e){var n=u.className,t=A._config.classPrefix||"";if(d&&(n=n.baseVal),A._config.enableJSClass){var o=new RegExp("(^|\\s)"+t+"no-js(\\s|$)");n=n.replace(o,"$1"+t+"js$2")}A._config.enableClasses&&(n+=" "+t+e.join(" "+t),d?u.className.baseVal=n:u.className=n)}function i(e,n){if("object"==typeof e)for(var t in e)c(e,t)&&i(t,e[t]);else{var o=(e=e.toLowerCase()).split("."),r=A[o[0]];if(2==o.length&&(r=r[o[1]]),void 0!==r)return A;n="function"==typeof n?n():n,1==o.length?A[o[0]]=n:(!A[o[0]]||A[o[0]]instanceof Boolean||(A[o[0]]=new Boolean(A[o[0]])),A[o[0]][o[1]]=n),a([(n&&0!=n?"":"no-")+o.join("-")]),A._trigger(e,n)}return A}var r=[],s=[],l={_version:"3.6.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,n){var t=this;setTimeout(function(){n(t[e])},0)},addTest:function(e,n,t){s.push({name:e,fn:n,options:t})},addAsyncTest:function(e){s.push({name:null,fn:e})}},A=function(){};A.prototype=l,A=new A;var c,u=n.documentElement,d="svg"===u.nodeName.toLowerCase();!function(){var e={}.hasOwnProperty;c=o(e,"undefined")||o(e.call,"undefined")?function(e,n){return n in e&&o(e.constructor.prototype[n],"undefined")}:function(n,t){return e.call(n,t)}}(),l._l={},l.on=function(e,n){this._l[e]||(this._l[e]=[]),this._l[e].push(n),A.hasOwnProperty(e)&&setTimeout(function(){A._trigger(e,A[e])},0)},l._trigger=function(e,n){if(this._l[e]){var t=this._l[e];setTimeout(function(){var e;for(e=0;e<t.length;e++)(0,t[e])(n)},0),delete this._l[e]}},A._q.push(function(){l.addTest=i}),A.addAsyncTest(function(){function e(e,n,t){function o(n){var o=!(!n||"load"!==n.type)&&1==a.width;i(e,"webp"===e&&o?new Boolean(o):o),t&&t(n)}var a=new Image;a.onerror=o,a.onload=o,a.src=n}var n=[{uri:"data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAAwA0JaQAA3AA/vuUAAA=",name:"webp"},{uri:"data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA==",name:"webp.alpha"},{uri:"data:image/webp;base64,UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA",name:"webp.animation"},{uri:"data:image/webp;base64,UklGRh4AAABXRUJQVlA4TBEAAAAvAAAAAAfQ//73v/+BiOh/AAA=",name:"webp.lossless"}],t=n.shift();e(t.name,t.uri,function(t){if(t&&"load"===t.type)for(var o=0;o<n.length;o++)e(n[o].name,n[o].uri)})}),function(){var e,n,t,a,i,l;for(var c in s)if(s.hasOwnProperty(c)){if(e=[],(n=s[c]).name&&(e.push(n.name.toLowerCase()),n.options&&n.options.aliases&&n.options.aliases.length))for(t=0;t<n.options.aliases.length;t++)e.push(n.options.aliases[t].toLowerCase());for(a=o(n.fn,"function")?n.fn():n.fn,i=0;i<e.length;i++)1===(l=e[i].split(".")).length?A[l[0]]=a:(!A[l[0]]||A[l[0]]instanceof Boolean||(A[l[0]]=new Boolean(A[l[0]])),A[l[0]][l[1]]=a),r.push((a?"":"no-")+l.join("-"))}}(),a(r),delete l.addTest,delete l.addAsyncTest;for(var f=0;f<A._q.length;f++)A._q[f]();e.Modernizr=A}(window,document);