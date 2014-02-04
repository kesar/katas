CDs
=====

Your application is managing CDs

* Your CD has title, band and track list where you can store songs.
* You can retrieve the information of a CD in different formats like json or xml.
* The CD can be bought and it will notify at least to an email but it will be ready to attach other notifications without change the buy() implementation.
* Some artists are now releasing additional content on their CDs that can be used on the computer. These CDs are called EnhancedCD. The first track written to the disc is a data track.
 The EnhanceCD class is similar to regular CD class. Same public methods but it adds the first track when you are creating it.

Use TDD, Mock objects and the following patterns:
* Strategy pattern
* Observer pattern
* Factory pattern