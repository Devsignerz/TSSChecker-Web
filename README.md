# TSSWeb :iphone:


**TSSChecker** is now web based thanks to @DanielD3V.

**TSSWeb UI & a few other features** added by Joseph Shenton.

**TSSWeb** allows people to easily and quickly check the signing status of iOS & tvOS versions with a nice, clean and easy to use User Interface!


Installation
------------

  To install **TSSWeb** you will need either a Linux VPS, Linux Desktop, macOS VPS or a macOS Desktop, you will also need LAMP/XAMPP server running on said VPS/Desktop.
  
  If you are using macOS you don't have to modify anything however if you are using linux you will need to change the following.

Linux:

**File:** pages/check.php

**FROM**
    
    $output = shell_exec("cd ../internal_files; ./tsschecker/tsschecker_macos -d $device_clean --boardconfig $boardconfig_clean -i $version_clean");
    
**TO**

	$output = shell_exec("cd ../internal_files; ./tsschecker/tsschecker_linux -d $device_clean --boardconfig $boardconfig_clean -i $version_clean");

Coming Soon
---------------

* Blob Saving (Almost there having some issues with the folder creation right now, PHP is putting '****' around variables which it shouldn't do!)


Thanks
------

**DanielD3V** & **Joseph Shenton** © 2018+, Norway & Sydney, Australia. Released under the [MIT License].<br>
Authored and maintained by DanielD3V & Joseph Shenton and with help from [contributors].

> [DanielD3V.us](http://danield3v.us) &nbsp;&middot;&nbsp;
> GitHub [@danieldevofficial](https://github.com/danieldevofficial) &nbsp;&middot;&nbsp;
> Twitter [@DanielD3V](https://twitter.com/DanielD3V)

> [Joseph.sh](https://joseph.sh) &nbsp;&middot;&nbsp;
> GitHub [@JosephShenton](https://github.com/JosephShenton) &nbsp;&middot;&nbsp;

[MIT License]: http://mit-license.org/
[contributors]: http://github.com/danieldevofficial/TSSChecker-Web/contributors
