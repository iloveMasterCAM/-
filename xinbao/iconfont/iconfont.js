(function(window){var svgSprite='<svg><symbol id="icon-mp-location" viewBox="0 0 1024 1024"><path d="M512 0C292.067556 0 113.777778 171.918222 113.777778 384S512 1024 512 1024s398.222222-427.918222 398.222222-640S731.932444 0 512 0zM512 544.028444c-109.966222 0-199.111111-86.016-199.111111-192 0-106.040889 89.144889-192 199.111111-192s199.111111 85.959111 199.111111 192C711.111111 458.012444 621.966222 544.028444 512 544.028444z"  ></path></symbol><symbol id="icon-dianhua" viewBox="0 0 1024 1024"><path d="M488.859546 658.286689c-1.000832-0.629295-114.835855-186.360069-115.219473-188.752399-23.522562-49.896588-42.518224-100.90879-2.947117-123.580545L206.414614 77.201276c-42.536348 30.894884-162.982497 198.479797 62.407989 578.232942 237.434698 400.214814 463.397088 383.562145 508.704349 356.469212L617.415049 749.536548C579.593887 771.145045 547.710254 735.578271 488.859546 658.286689zM887.387848 910.03207l0.050344-0.170162c0 0-125.016345-204.398195-125.079778-204.4868-9.885477-16.206624-31.223125-21.256091-47.831492-11.855927l-76.579723 43.927846 160.520693 263.078741c0 0 76.611943-43.745602 76.561599-43.834207l0.170162-0.063433C892.745418 946.561414 896.807143 925.589261 887.387848 910.03207zM468.214627 290.232398l0.038261-0.14499c17.55382-10.104975 21.709184-31.00262 12.29593-46.447041l0.056385-0.207416c0 0-128.598799-210.341765-128.662232-210.392109-9.903601-16.275092-31.273469-21.274215-47.819409-11.88714l-76.592813 43.960066L391.628862 334.015254C391.628862 334.015254 468.183414 290.339127 468.214627 290.232398z"  ></path></symbol><symbol id="icon-vip" viewBox="0 0 1024 1024"><path d="M513.6 61c248.3 0.9 448.7 200.6 448.2 449.5-0.5 247.8-200.6 448-449.6 447.4C264.5 957.4 64.5 757.3 65 508.6 65.5 260.9 265.3 61.8 513.6 61L513.6 61zM794 334.8c-3.8-0.3-6.2-0.6-8.5-0.6-43.1 0-86.2 0-129.3-0.1-5 0-8.5 1.4-12 5C584 401 523.7 462.8 463.4 524.7c-1.1 1.2-2.4 2.2-4.3 3.9l0-6.8c0-60.4 0-120.8 0.1-181.2 0-4.3-0.7-6.5-5.7-6.4-44.7 0.1-89.4 0.1-134.1 0-3.8 0-5.3 1.1-5.2 5.1 0.2 13.4 0.3 26.8 0 40.3-0.1 4.2 1.3 5.5 5.4 5.5 11.8-0.2 23.7-0.1 35.5 0 6.9 0 6.9 0 6.9 6.9 0 125.8 0 251.5 0 377.3l0 6.6c0.5 0.2 0.9 0.3 1.4 0.5C506.6 629.5 649.8 482.7 794 334.8L794 334.8z"  ></path></symbol><symbol id="icon-yijianfankui" viewBox="0 0 1024 1024"><path d="M893.994667 251.008V29.738667A29.44 29.44 0 0 0 864.853333 0H159.146667a29.44 29.44 0 0 0-29.184 29.738667v221.269333L0 323.242667v671.402666a29.013333 29.013333 0 0 0 5.546667 17.152 28.416 28.416 0 0 0 22.272 12.074667L995.157333 1024a29.098667 29.098667 0 0 0 28.842667-29.354667V326.016l-57.685333-32.213333m-4.266667 65.408l-68.053333 40.234666V318.976l68.010666 40.234667zM810.666667 85.333333c4.266667 0 0 341.333333 0 341.333334l-298.666667 170.666666-298.666667-170.666666V85.333333M61.994667 359.210667l68.010666-40.234667v80.469333l-68.010666-40.234666z m-4.266667 605.994666V424.618667L497.493333 684.8c2.005333 1.024 2.602667 1.28 3.242667 1.578667l3.242667 1.237333c3.2 0.682667 4.266667 0.853333 5.376 0.981333h5.376a32.341333 32.341333 0 0 0 8.618666-2.218666c2.346667-1.152 2.816-1.28 3.242667-1.578667l439.765333-260.138667v540.586667H57.685333z"  ></path><path d="M42.666667 410.282667V1024h938.666666V384l-448.128 277.290667L42.666667 384v26.282667"  ></path><path d="M298.666667 170.666667l426.666666 0 0 85.333333-426.666666 0 0-85.333333Z"  ></path><path d="M298.666667 341.333333l256 0 0 85.333334-256 0 0-85.333334Z"  ></path></symbol><symbol id="icon-xinxi" viewBox="0 0 1024 1024"><path d="M0 320.19999999999993v604h1024v-604L512 694.4000000000002 0 320.19999999999993z m0-144.4v57.2l512 378L1024 230.80000000000004V175.8H0z" fill="#5E5E5E" ></path></symbol></svg>';var script=function(){var scripts=document.getElementsByTagName("script");return scripts[scripts.length-1]}();var shouldInjectCss=script.getAttribute("data-injectcss");var ready=function(fn){if(document.addEventListener){if(~["complete","loaded","interactive"].indexOf(document.readyState)){setTimeout(fn,0)}else{var loadFn=function(){document.removeEventListener("DOMContentLoaded",loadFn,false);fn()};document.addEventListener("DOMContentLoaded",loadFn,false)}}else if(document.attachEvent){IEContentLoaded(window,fn)}function IEContentLoaded(w,fn){var d=w.document,done=false,init=function(){if(!done){done=true;fn()}};var polling=function(){try{d.documentElement.doScroll("left")}catch(e){setTimeout(polling,50);return}init()};polling();d.onreadystatechange=function(){if(d.readyState=="complete"){d.onreadystatechange=null;init()}}}};var before=function(el,target){target.parentNode.insertBefore(el,target)};var prepend=function(el,target){if(target.firstChild){before(el,target.firstChild)}else{target.appendChild(el)}};function appendSvg(){var div,svg;div=document.createElement("div");div.innerHTML=svgSprite;svgSprite=null;svg=div.getElementsByTagName("svg")[0];if(svg){svg.setAttribute("aria-hidden","true");svg.style.position="absolute";svg.style.width=0;svg.style.height=0;svg.style.overflow="hidden";prepend(svg,document.body)}}if(shouldInjectCss&&!window.__iconfont__svg__cssinject__){window.__iconfont__svg__cssinject__=true;try{document.write("<style>.svgfont {display: inline-block;width: 1em;height: 1em;fill: currentColor;vertical-align: -0.1em;font-size:16px;}</style>")}catch(e){console&&console.log(e)}}ready(appendSvg)})(window)