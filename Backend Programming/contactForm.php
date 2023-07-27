<!DOCTYPE html>
<style>
	body{
		font-family: "Century Gothic", sans-serif;
		background-color: #EFD6BE;
		overflow: hidden;
	}
	
	.menu {
	  font-size: 20px;
	  text-align: left;
	  padding: 5px 10px 0px 80px;
	}

	.menu1 {
	  list-style: none;
	  display: inline-block;
	  margin-top: 0;
	  margin-bottom: 0;
	  padding-bottom: 0;
	}

	.menu1 li {
	  display: inline-block;
	  margin: 0 10px;
	  margin-bottom: 0;
	}
	.menu1 li a {
	  text-decoration: none;
	  color: white;
	  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
	}
	.menu1 li a:hover {
	  color: yellow;
	}
	.logo-text-1 {
	  position: absolute;
	  top: -7%;
	  left: 45%;
	  transform: translateX(-50%);
	  text-align: center;
	  font-size: 43px;
	  font-weight: bold;
	  z-index: 1;
	  color: #EFD6BE;
	}
	.logo-text-2 {
	  position: absolute;
	  top: 24%;
	  left: 70%;
	  transform: translateX(-50%);
	  text-align: center;
	  font-size: 43px;
	  font-weight: bold;
	  z-index: 1;
	  color: #EFD6BE;
	}
	.logo {
	  position: absolute;
	  top: 5%;
	  left: 3%;
	  transform: translate(-50%, -50%);
	  text-align: center;
	}
	.flipped-image {
	  transform: scaleX(-1);
	  width: 70px;
	  height: 70px;
	  z-index: 0;
	 }
	td.tlabel{
		width: 90px;
		text-align: right;
		padding-right: 10px;
	}
	.expand{
		width: 170px;
	}
	ul {
		list-style: none;
		padding: 5px;
	}
	.socials {
	  display: flex;
	  flex-direction: row; 
	  align-items: center;
	  justify-content: center;
	}

	.socials li {
	  margin: 10px; 
	}
	.socials img:hover{
		transform: scale(1.08);
	}
	li {
		padding-bottom: 10px;
	}
	img {
		padding-top: 5px;
	}
	.contact-block {
		display: flex;
		justify-content: center;
		padding: 10px;
		padding-top: 20px;
		text-align: center;
	}
	.contact-details {
		margin-top: 40px;
		box-shadow: -1px -1px 2px #EFD6BE, 1px -1px 2px white, -1px 1px 2px black, 1px 1px 2px #C5C7D3;
		background-color: #E3E9F1;
		display: inline-block;
		color: #B75B16;
		padding: 10px;
		padding-top: 30px;
		border-radius: 15px 0 15px 15px;
	}
	.input-wrapper {
	  display: flex;
	  align-items: center;
	  border: 1px solid #ccc;
	  border-radius: 5px;
	  padding: 5px;
	}

	.input-wrapper label {
	  padding: 0 10px;
	  font-size: 20px;
	}

	.input-wrapper input:not(.big-input) {
	  border: none;
	  outline: none;
	  flex: 1;
	  font-size: 20px;
	  padding-top: 5px;
	}

	input[type="submit"] {
		font-family: "Century Gothic", sans-serif;
		background: none;
		border: none;
		color: #B75B16;
		text-shadow: black;
		cursor: pointer;
		font-size: 20px;
		text-align: center;
		padding: 0;
		border-radius: 5px;
		background-color: none;
	}
	 #submit-btn {
		position: relative;
		display: inline-block;
		width: 100px;
		height: 20px;
		background: #B6CEEA;
		color: white;
		font-size: 16px;
		padding: 10px;
		border: white 2px solid;
		border-radius: 5px;
		cursor: pointer;
		overflow: hidden;
	  }


	  #submit-btn:hover {
		background: #A7EAA0;
	  }
	  
	  .note-wrapper {
		display: flex;
		flex-direction: column;
		padding-top: 10px;
		padding-right: 10px;
	  }

	  .note-label {
		font-size: 20px;
		padding-bottom:0;
		margin:0;	  
	  }
	  #note {
		width: 100%;
		font-size: 20px;
		border: 1px solid #ccc;
		border-radius: 10px;
		resize: none;
	}

	.contact-info {
		background-color: #ffe4c4;
		box-shadow: -1px -1px 2px #EFD6BE, 1px -1px 2px black, -1px 1px 2px white, 1px 1px 2px #C5C7D3;
		display: flex;
		margin-bottom: 40px;
		flex-direction: column;
		align-items: justify;
		text-align: center;
		color: #6D8EB4;
		padding: 20px;
		border-radius: 15px 15px 15px 0;
		list-style: none;
		text-decoration: none; 
	}

</style>
<body>
	<div> 
	  <a href="http://localhost/sherlocked/frontend/menu.html">
		<div class="logo">
		  <div class="logo-text-1">S</div>
		  <div class="logo-text-2">H</div>
		  <div><img src="sherlock.png" class="flipped-image"></div>
		</div>
	  </a>
	  <div class="menu">
		<ul class="menu1">
		  <li><a href="http://localhost/sherlocked/frontend/adonis_tictactoeCode/choose.html">Game Centre</a></li>
		  <li><a href="http://localhost/sherlocked/frontend/photo.html">Photo Gallery</a></li>
		  <li><a href="http://localhost/sherlocked/frontend/collection.html">Collection</a></li>
		  <li><a href="http://localhost/sherlocked/frontend/about.html">About the Site</a></li>
		</ul>
	  </div>
		<div id="contact-title" style="padding-top: 0; color:#EFD6BE; text-shadow: -1px -1px 2px #B75B16, 1px -1px 2px grey, -1px 1px 2px black, 1px 1px 2px #C5C7D3; font-size: 60px; text-align:center;
				margin-top: 0;">Contact Us</div>
		<br>
		<div class="contact-block">
			<div class="contact-details">
			<center class="head-contact" style="font-size: 25px; padding-bottom: 10px; margin:0;">Share Your Thoughts Here!</center>
				<form id="contactForm" action = "addContact.php" method="get">
					<table style="width:100%">
					<tr>
					  <td></td>
					  <td>
						<div class="input-wrapper">
						  <label for="name">Name</label>
						  <input type="text" name="name" id="name">
						</div>
					  </td>
					</tr>
					<tr>
					  <td></td>
					  <td>
						<div class="input-wrapper">
						  <label for="username">Username</label>
						  <input type="text" name="username" id="username">
						</div>
					  </td>
					</tr>
					<tr>
					  <td></td>
					  <td>
						<div class="input-wrapper">
						  <label for="email">Email</label>
						  <input type="text" name="email" id="email">
						</div>
					  </td>
					</tr>
					<tr>
					<td></td>
					<td>
					  <div class="note-wrapper">
						<div class="note-label">Note to the Team:</div>
						<div style="padding: 0">
						  <textarea name="note" id="note" rows="6" placeholder="Write your feedback here..."></textarea>
						</div>
					  </div>
					</td>
				  </tr>
					<tr>
					<td></td>
					<td>
						<div id="submit-btn" style="text-shadow: 2px 2px 4px black; font-size: 20px">
						  <input type="submit">
						</div>
					  </div>
					</td>
					</tr>
					</table>
				</form>
			</div>
			<div class="contact-info">
				<center style="font-size: 30px; padding-bottom: 0;">Let us get in touch!</center>
				<ul>
					<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAqFJREFUSEvF1k2oVlUUxvGfUZSRGYmjqIkgmJBSEaJBSImSFhE5yiyCauDEBurAL6KEIghyEA76DoSC6NuoKCL7HAVBQRnRoDIaiBVFFmk8sJTN6Zx7ve994e7ROfs97/qvtddaz9qzzNCaNUNck4EvwAZ8gQ/G6eRE4LkFuwwncAeeHRd8CHwe3scVDWis8D7wuXgLVxf003LgrHq/E09NN/I+8GtYV4YP4CZci1cxNngXfCm+7ED/qfe1eKmBb8Rzo0beBa/Ah2UsUb7XMbweL9TeUczD8VHgXfBCfF2GbsX+xmha6w0sr723sXoUaP7TBSeHf+EM3I9djeGDTcGlr1fiyLjAsfMVFlVlr2kM/4602SEsmw60L+Ls7cM9+AMX4u+Cv4PrcBgX499Rox0Cp31SvVk34PV6vq1Rrlvw4rjByfPPFe0r1cdhzMZPSJF9iyvx66jwIcl8ANvLaBTso3rehgfrOQWW3v6hgSc1z2MJtuLpIceGwPPxY4lFAJdXTvP9m00b/Ym9eLgA72JpAxuU14mm031NO+3AnjKYo46WX9UAom6/4KKeCHvhE4HPLvlcUMbuwuP1nDq4F3FoTgeWfn+kFG5Q2ye7COTYkt9MrKxNeKyT0y2IyqXFPsMqpOevx8tDg2UycBhte+X9IezGsdOo6C48s+DjoT7us5cefqaR2O+wsyp4IiFJugJKcWZtxqNTAefbGwt0TuPZ91XRT5bGt06n7zNUoulZn+OaSsOkl71u9JfgiZLO9rfIauZ4Wi/OpLdzSQwo6xNE9387+afTyXHf0UdU7kbmc3sCfd/m7pYbTbT/1BoVfNLA+bgdN9fIPLNDTl1k4PyvEKcLbjkppMWIM1nflLb3ncKUc9xrZJTNcUY8Jf6Mgf8DwJ56Hz1EG/IAAAAASUVORK5CYII=" style="padding-bottom: 0px;"/>
					<li>(+63)912-345-6789<br>(+63)22128893</li>
					<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAbtJREFUSEvt1rtrFFEUx/HPSqKlgZBCxMc/ICFNEBsb7XyABEJAC21ECBKw8VGoqGghKFrYCWIgCEHw0ZkinUIKi5BSlIBYiIU2YiIqR+7IdXAzm3XYbXaquXfO/X3P/O65j4YuPY0ucfXAHXO+bPVJnMXOmjN4hyu4X+jm4L2YrxlYlhvFQnTm4PO4liIv15zAxaR3DjfK4EsoAo5huib4UTzMfig4f/1xDo5v9zCFlTYT2IjbOJWNDycrwRH/Ggfxfp3wrXiGkdK4SnDYHBbF8wkTeNEifD9mMJjic61/gmN+f9uQpuA0bqIfP9L8R/H9bJJAFOoFhPgGrOIM7mZjWgKH/m48xVCCzWEMn0vwzZjFvtT/AUfwKrWLZCutzpfZFjxOSYTOMg5gMYnuwnNsT+2AHcLHLLm2wDG+D7cwmcS+4UR6j91oU3q/k+z9XnKkbXChM44HGajo/4rjeNRk/v8bHLrDeIIdCfIGh7G0RtXXAg79AYStUe1R/V8qllpt4BaX9J+wHrjjx2IcvdeLrbGYiE5cBPbgZRkc7TjC4rDett7qqYh/i6vNrj41s9aW692rO2Z316z+BRs3ZB8+F4SyAAAAAElFTkSuQmCC"/>
					<li>officialshfiles@sherlockfiles.com<br>inquirenow@sherlockfiles.com<br>requestdesk@sherlockfiles.com</li>
					<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAyNJREFUSEvF1kfIXVUUBeAvKpoIxhIM1thIjA0big7sooIomuBAFIIFFJ2IXRBBRI0tmUSxoIg4kkBQUFQEKwp2xBIQu2SgScCJGsXCkn3Dzcu797/vd5A9ee+ec/ZeZ++zztpnhi1kM7YQrukA74OjsC/+wbf4EN9PksRQ4Ky7AtdifgfAatyPJ2pDvfsYArwHVuHYgRm9iUVY27d+KuAFeA27V5DP8Sg+xmc1diiOwJU4sMZS/hPxQxd4H/BsvN8q7W24E393BNsGd+GGmv8Ix2PDuPV9wE/jonK6Gg+1ApyA0+r7FbzVmssGb6/vB3D9JMDH4Z1ySGlDrNhCrMQhI8E+qXP9qsbDifOqOvH5chS8K+PluKYcd8PPmFvXZs+OUn+DI/FLbfCLWncj7hsK/Gll9TLOLKfHcWn9fxj38J8O3Noavxc31ZqQ72C0Y2zE78p4PXbGMlxXq9dhF7yOk0cyeBfHIHf5oJp7EktKYPYbmnGYuG2xOBnF/kSYG5FomNvEC4kiLr9h+xq8Gzfjd8waCvwd5iHlvbycIol74w2cNBLo7bo6X+OAmouCXYLEirxuYl2lTvBcmVdxanmsQK5VLFcrZ7z1yBm3j6aJMe5oOpvEY5VpxCLnGqbmN4qVrMdZrkzOOWvn4CdshUdK1QZlfAZeqpWXlfDns+sev4fFLYm8Cg+W/yklu4OAU8I1dXd/xP5FrsY55Y8Wx55F5LGxkCtavWvF2Gtct+qTzLD5joo2VgQ6Sh69vqXmIpdh/GbWB7wdwtK0xT+q8ySTPju81C1nG98cTa7hRMBZfAGeKa/ocbrNrx3IEZwP0IjF2Xiha5dT9eP4hSQhS+y5agZ/jQScWWRszn1pq9xjsYcAh2gv4vSKkApc2OrLAX2+dd/TmcLwvMc6bQhwnMPUCMLRFalplTnLAJ1b4+nNKXE40WtDgRNkx7qPeebEnsIOOL++89Y6q4cDm2xkEuA4Rr3yBjtsJJ28QNI+u4i3WfaTAifATkWk5tWZ8p5TXWiqCm+cnw5wnNMeLy6C5W3W9QD83+QanMnQhdPNeGj8znX/AnF/mR9rlxa8AAAAAElFTkSuQmCC"/>
					<li>221B Baker Street, Watson City, Sherlocklandia</li>
				</ul>
				<span>You can also reach us on social media:</span>
				<ul class="socials" style="padding-top: 0; padding-bottom: 0; margin-top: 0; margin-bottom: 0;">
					<a href="www.facebook.com"><li><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAs1JREFUSEvt1l/on3MUB/DXlmmEYiP5U7SJtrEoG8tqtQsuXCh/SijFmv8udoVNNn9S25TWUNxwIaalJS6klH+xxv5wNUZIRIkYG2N6/zpPPd/H9/muX8nvd7Fz9Tyf55zzPn/e53yeKSZIpkwQrsPA/1vlJ32pz8V+fIE/R5TlSMzFLvw1qnyjMj4dy3ENzionv2MNHsMfLcdnYyWuxFHYi7ewFm8OC6AP+FS8j9N6ov4Al+EnXI6XcQR+w6c4j7GJyfvS8jXgahjwCXgX55TmHryGC7CoHOZTMrkT2zAd63F/gcXHU7gaP2IhPmsjDwN+EreUUp5vaxlchFcws85+xTF4sEDbvo/FTpyJF3DtKOAZ+Lr6FKNk+Xen3LOxFcfX+W7M6yFd+PFiES0BxPeYdDO+Fw/XtxvxbE+P78CGFuFm4dshuun7NzipCLliGHBbKX05pUao6y96nyBMbuQZLOsJ8hHcUz1upmMg4/PxURn/qyctpyHQ6iJNRurkascCfDgEfEkRMS3LqI2NYbvUGYsQJ/IQVg1xMgc7MK1Il3F6vvTCiQR/sGOXffBVnWURpVoDwFkWGYFIX3/fxiX4vMYtWyyLYnHZpfcbO8BTsa+CDdle6gK3iRVH73Qc3IT0MnIFttRzGJ1sA5CFkap82bHNqj0D9yE9H8j4LjxeBpfi9ZZxiLS9epSAmgwblXVoGJsKpK/tkv+M4/BA8WMAOKvtjfLUZumJeA+Z35RsPjK7bQlpcjFEJxICZqlELi77PF+Fzd2Mj8Z3yMaJvIqPq99hbuR2PNEBbV4vrPbkhopswve4rpZNsg7RfukC5/0GPNfjeNSINSY34+ke+0drnsc+D9vVt9Y4ZdFHMjIpfZbAgR6n7ePrkR2fHd5Ittzd7b73XYs5D1sjKfd4pfkhyK2VW+mHroNJ/+sz3owPqX8440OW6L9SmLBS/wPPRosfV9KewwAAAABJRU5ErkJggg==" style="padding-top: 0; padding-bottom: 0; margin-top: 0; margin-bottom: 0;"/></li></a>
					<a href="www.instagram.com"><li><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAvVJREFUSEvl1ksIVVUUBuDPntADDJKy7EFYoaCp1aSwxJqVJBIURPmAGjizwkBKrAiFipwIDco0IXBQSZaTgkiDoqdIUkgNIiuCIElrlsUv68bhdM59NDFow+XC2Xuvf61//XutNcVJWlNOEq7/PPB0zMSpIxj6A1/jx1FMDov4QjyN23DeKEOt/V/wFtb2OdEHHLCdOLsM/obPkYiGrTOwAGfWoWO4C3val7qAz8I3SMQv4Xl8OgbowPZpWIjH6/8HXInfm+BdwLmwviK+e0KKc/xeToj2ZbyLReXEhlHAh3FxRfzThMABDWDWykrPfnyPGcOAQ28U+RVm9YDGqTtwA/7EB3i97t2H7XVvVaXqKM7BNPw8sNmmOsJIPt+v/LSxH8AzOLe18SvWYCtWFNVf4OPSyxWYg3w7sdrAEcXeegq3t4w/VKAB2YzPcDrmFmiiCnj2mutAgYahsNMJfCveLuqWNW7PL+9D1bWVs6bxS8uRMBHWDjY2k+NrisEwORT4VdzZuPwEHsODeK4n949gEx7FU40zYSaO34R9fcC34J2OiHcj1OeXitS1wlAcbjsdzYSFPKv3+oCzmbf3JpY0rO8qJUfNb0wIHIFdh8Vlu5PqAXCMB2SwUlBSWB7Gsz3A64ri/G9snPmkdHFzCXcocDviS+ptp+zN6xDXZVUsUi6vbjWGscR1Y73h5LH9nFZjC1L482QSSZpCFJtnlBp/P15oMRKFz8b1dacz4qgvKuwrIDEcqrsKSBT/Ykca0nBSQOJg3nQncOrpd/gWl/fkMiVzKcJO2uSHeK2n755SXSltMulKH+gEzoRxpGrrReNMEj3ODT5HzVF10jO12Vq72mLoSoF/BfeMMDxqO+U3ZTh9PTb/Xl3A5+NQjTuZHJ7ERzg+CqX2B4NA7iUdGYOuanamnOsbfZZjWwPo344+MZFWuaPt9LBhL7U1Sk0Fi0gmWWEntSAvIHT/Y40zV18wZCjoc+ZLDJ1exgGeJNKxz/7/gP8C/LagH31MPSUAAAAASUVORK5CYII=" style="padding-top: 0; padding-bottom: 0; margin-top: 0; margin-bottom: 0;"/></li></a>
					<a href="www.twitter.com"><li><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAe5JREFUSEvt1kuozVEUx/HPjYEkz+KWV5SkxAATrzwiKQORDBQpA4UUZSAGd0ApCZGpibeMJBOFgcREhkwoSZlIeRet2vd077/zP3ufzsmZ3F27/2Cv/fvutfbaa/379Gj09YhrBPzfIt+NUE/AZSzHTPzAOZzGt+TJtPT9NOhZFTwWV7AXfwrcn46nmNPE9gOuYyHGY8VQmyp4G+7gHnYUwO9jc+aAb7ApReNxnccHcSEtPscuvK0RXooXBVF5h35sxYM68Go0ToWfOImL+F6BHML5AvDn5MDDVqEeg68YXRGMJLmLa3iFjziBgQLwGRyr2jXL6v0pS1tpfkHMWQXg4ziVA+/BIizGugLREpPQvJoDb8SwuyhRztjE+36WA8fdRhbP7gIwJOI6JuFvDhzrq9I7ntIF+E3sbKZTVzKjIh3BPozr4ABrKs+zIVUHPoDtWNIB+CWW1R26DrwArzGqA2/X41G74LDfghuIxtHuOIujrTbl2uJURNjXYmUh/Qk24Fcn4GhnkWSHU2vLsSNCu3PQEBnq8eRUsaKZz08zqle8w9yI9xql8VLOcHC9GurI5Kir8woFfuNWikrj76Jkb90dh6fR4OPPYgbmYiKixcV8n4rM7VSdSljDbHLJ1bZg6YYRcGmkOrbrWaj/AVe4TB8KwZmFAAAAAElFTkSuQmCC" style="padding-top: 0; padding-bottom: 0; margin-top: 0; margin-bottom: 0;"/></li></a>
				</ul>
			</div>
		</div>
</body>
</html>				