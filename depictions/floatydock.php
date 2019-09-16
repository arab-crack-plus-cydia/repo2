
<!DOCTYPE html>
<html>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-136123072-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-136123072-1');
</script>

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style_depictions.css" />
        <title>FloatyDock - SynnyG_R's website</title>
    </head>

    <body>
        <section id="bloc_depiction">
            <img id="depiction_logo" src="depictions/Ressources/img/FloatyDock-icon.png" alt="" />

            <h1 id="depiction_title">FloatyDock</h1>

            <p id="depiction_description">Compatible with iOS 11+<br /><br />FloatyDock bring the iPad dock to all devices !<br />This also mean that you'll be able to use the Slide Over / Split View features on iPhone (they aren't supported on iPhone X/XR/XS, and Split View on 5S/SE sorry !).<br /><br />Features list:
                <ul>
                    <li id="features_list">Specify the number of regular apps icons</li>
                    <li id="features_list">Specify the number of suggested / recent apps icons</li>
                    <li id="features_list">Enable dock in apps (with the ability to dismiss it with an home button click)</li>
                    <li id="features_list">Slide Over and Split View for an awesome multitasking experience</li>
                    <li id="features_list">... And many more planned !</li>
                </ul>
            </p>
            <p id="depiction_description_last">Follow me on Twitter for news about this or other apps ;) Enjoy !</p>
        </section>

        <section id="bloc_screenshots">
            <h1 id="screenshots_title">Screenshots</h1>
    
            <div id="bloc_pkg_screenshots">
                <img class="screens" src="/Ressources/img/floatydock_screenshot-1.jpg" alt="" />
                <img class="screens" id="other_screens" src="/Ressources/img/floatydock_screenshot-2.jpg" alt="" />
                <img class="screens" id="other_screens" src="/Ressources/img/floatydock_screenshot-3.jpg" alt="" />
                <img class="screens" id="other_screens" src="/Ressources/img/floatydock_screenshot-4.jpg" alt="" />
            </div>

            <a class="go_to_button" href="screenshots/floatydock.php" target="_blank">Full screenshots</a>
        </section>

        <section id="bloc_changelog">
            <h1 id="changelog_title">Changelog</h1>

            <p id="changelog_version_title">1.5 beta 1</p>
            <ul>
                <li id="changes_list">Added a setting to not show the dock when the keyboard is active</li>
                <li id="changes_list">Added dock tint color option</li>
                <li id="changes_list">Re enabled Slide Over on 5S/SE</li>
                <li id="changes_list">Added a setting for custom icons vertical padding</li>
                <li id="changes_list">Fixed gesture location with HomeGesture (devices older than X will present the dock with a gesture from the bottom and the CC with a gesture from the top right while iPhone X will invoke the dock with a gesture from the bottom left or right, the middle staying untouched)</li>
                <li id="changes_list">Added theoretical support for XR/XS/XS max (still not compatible with Slide Over / Split View)</li>
                <li id="changes_list">Fix Iconator11 conflicts</li>
            </ul>

            <p id="changelog_version_title">1.4.1</p>
            <ul>
                <li id="changes_list">Fixed conflicts with Boxy 3</li>
                <li id="changes_list">Fixed wrong icons vertical padding in folders</li>
                <li id="changes_list">Code improvements</li>
            </ul>

            <p id="changelog_version_title">1.4</p>
            <ul>
                <li id="changes_list">Fixed icons being moved up with FloatyDock enabled</li>
                <li id="changes_list">Fixed last row not being fully tappable with FloatyDock enabled</li>
                <li id="changes_list">Added IconSupport as a dependency for the icons layout to not be reseted accros reboot</li>
                <li id="changes_list">Fixed forced rotation staying activated even with Slide Over / Split view enabled</li>
                <li id="changes_list_last">Split View / Slide Over (and so forced rotation) have been disabled on 5S / SE to avoid crashes due to incompatibility</li>
            </ul>
        </section>

        <section id="bloc_information">
            <h1 id="information_title">Information</h1>

            <p class="information_subtitle">Version</p>
            <p class="information">1.5b1</p>
            <p class="information_subtitle">Release date</p>
            <p class="information">18/03/2019</p>
            <p class="information_subtitle">Downloads count</p>
                        <p class="information">440</p>
            <p class="information_subtitle">Dependencies</p>
            <p class="information">mobilesubstrate, IconSupport, libCSColorPicker</p>
            <p class="information_subtitle">Section</p>
            <p class="information">Tweaks</p>
            <p class="information_subtitle">Status</p>
            <p class="information">Free<br /><br /></p>
        </section>
    </body>
</html>
