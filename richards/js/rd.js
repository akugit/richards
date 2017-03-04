function nextPage( next ) {
	document.getElementById('next').value=next;
	document.page.submit();
	return false;
}
<!-- Hide the code

browser_name = navigator.appName;
browser_version = parseFloat(navigator.appVersion);
roll = false;

if (browser_name == "Netscape" && browser_version <= 2.0) { roll = false; }
else if (browser_name == "Netscape" && browser_version >= 3.0) { roll =
true; }
else if (browser_name == "Microsoft Internet Explorer" && browser_version <=
2.0) { roll = false; }
else if (browser_name == "Microsoft Internet Explorer" && browser_version >=
3.0) { roll = true; }
else { roll = false; }

// For debugging. Comment out before release.
// window.alert("browser_name = " + browser_name + "\n" +
//              "browser_version = " + browser_version + "\n" +
//              "roll = " + (roll ? "true" : "false"));

if (roll) {
    dart1b = new Image;
    dart1b.src = "richards/images/dartoik2.gif";

    dart2b = new Image;
    dart2b.src = "richards/images/dartoik2.gif";

    dart3b = new Image;
    dart3b.src = "richards/images/dartoik2.gif";

    dart4b = new Image;
    dart4b.src = "richards/images/dartoik2.gif";

    dart5b = new Image;
    dart5b.src = "richards/images/dartoik2.gif";

    dart6b = new Image;
    dart6b.src = "richards/images/dartoik2.gif";

    dart7b = new Image;
    dart7b.src = "richards/images/dartoik2.gif";

    dart8b = new Image;
    dart8b.src = "richards/images/dartoik2.gif";

    dart9b = new Image;
    dart9b.src = "richards/images/dartoik2.gif";

    dart10b = new Image;
    dart10b.src = "richards/images/dartoik2.gif";

    dart11b = new Image;
    dart11b.src = "richards/images/dartoik2.gif";

    dart12b = new Image;
    dart12b.src = "richards/images/dartoik2.gif";

    dart21b = new Image;
    dart21b.src = "richards/images/dartoik2.gif";

    dart22b = new Image;
    dart22b.src = "richards/images/dartoik2.gif";

    dart23b = new Image;
    dart23b.src = "richards/images/dartoik2.gif";

    dart1 = new Image;
    dart1.src = "richards/images/dartoik.gif";

    dart2 = new Image;
    dart2.src = "richards/images/dartoik.gif";

    dart3 = new Image;
    dart3.src = "richards/images/dartoik.gif";

    dart4 = new Image;
    dart4.src = "richards/images/dartoik.gif";

    dart5 = new Image;
    dart5.src = "richards/images/dartoik.gif";

    dart6 = new Image;
    dart6.src = "richards/images/dartoik.gif";

    dart7= new Image;
    dart7.src = "richards/images/dartoik.gif";

    dart8 = new Image;
    dart8.src = "richards/images/dartoik.gif";

    dart9 = new Image;
    dart9.src = "richards/images/dartoik.gif";

    dart10 = new Image;
    dart10.src = "richards/images/dartoik.gif";

    dart11 = new Image;
    dart11.src = "richards/images/dartoik.gif";

    dart12 = new Image;
    dart12.src = "richards/images/dartoik.gif";

    dart21 = new Image;
    dart21.src = "richards/images/dartoik.gif";

    dart22 = new Image;
    dart22.src = "richards/images/dartoik.gif";

    dart23 = new Image;
    dart23.src = "richards/images/dartoik.gif";

}

function img_act(img) {
    if (roll) {
	document.images[img].src = eval(img + "b.src");
    }
}

function img_inact(img) {
    if (roll) {
	document.images[img].src = eval(img + ".src");
    }
}
// Start Cloaking
function kartta1()
{win1=open('','kartta1','toolbar=no,location=no,status=no,menubar=no,resizable=yes,width=280,height=310,scrollbars=no');
 win1.focus();}
// End Cloaking -->
