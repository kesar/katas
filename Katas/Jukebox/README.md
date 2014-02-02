Jukebox
=====

Your application is playing songs in a random order

* You can add Song objects to the application, Song objects have a play() method
* After adding some number of Songs to the list first, you can ask the application to play the next song
* The order of the songs played should be random, but one song should not repeat in one iteration (one iteration means playing all the songs in the list)
* After an iteration the songs should be played again, but in different (random) order
* Extra: your application throws an exception when the user tries to play the next song but there's none in the list

TIP: because randomness is difficult to test, you should inject another collaborator to the application (a random number provider) that you can mock in your tests. Remember Dependency Injection!

Please come up with the test list yourself based on the spec.

Quick guide for test doubles

Test doubles gave several types:
* fixtures
* dummy objects
* mock objects
* stubs

For this exercise you'll use mock objects and stubs. Both can be injected to the tested class as collaborators.

## Stub

A stub is a "fake object" that gives "pre-programmed" answers for method calls, mimicking the behavior of an actual (original) class.

Example (works in a PHPUnit testcase):

```PHP
$random_mock = $this->getMock( 'Random', array( 'getRandomNumber' ) )

$random_mock->expects( $this->any() )
	->method( 'getRandomNumber' )
	->will( $this->returnValue( 1 ) );

// Prints "1"
echo $random_mock->getRandomNumber();

// OR

$random_mock->expects( $this->any() )
	->method( 'getRandomNumber' )
	->will( $this->onConsecutiveCalls( 1, 2, 3, 4 ) );

// Prints "1234"
echo $random_mock->getRandomNumber();
echo $random_mock->getRandomNumber();
echo $random_mock->getRandomNumber();
echo $random_mock->getRandomNumber();
```

## Mock object

Mock objects are similar to stubs in a way that they can mimic the behavior of a collaborator. On the other hand they are also used to verify delegation. It means that you can program an expected method call to a mock and if that is not done, the test fails. You shouldn't use mocks unless you want to test delegation. Ideally you can max one mock object in one single test execution.

```PHP
$song_mock = $this->getMock( 'Song', array( 'play' ) );

$song_mock->expects( $this->once() )
	->method( 'play' );

// Verification passes, nothing happens.
$song->play();

// OR

$song_mock->expects( $this->exactly( 3 ) )
	->method( 'play' )
	->with( '2:11' ) // start at
	->will( $this->returnValue( true ) );

// Verification fails, exception thrown
$song->play();
$song->play( '3:25' );
```