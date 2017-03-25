[![Open Source Love](https://badges.frapsoft.com/os/v2/open-source.svg?v=102)](https://github.com/ellerbrock/open-source-badge/)<br>
[![forthebadge](http://forthebadge.com/badges/uses-git.svg)](http://forthebadge.com)
[![forthebadge](http://forthebadge.com/badges/built-by-developers.svg)](http://forthebadge.com)
[![forthebadge](http://forthebadge.com/badges/built-with-love.svg)](http://forthebadge.com)
[![forthebadge](http://forthebadge.com/badges/built-with-swag.svg)](http://forthebadge.com)
# SUDOROOMS
**Backend API For the Sudo Rooms Application at Clash Hacks 2k17**

## Team Tricode

1. [Aditya Aggarwal](https://github.com/the-cybersapien/)
2. [Harshit Budhraja](https://github.com/harshitbudhraja/)
3. [Nikhil Bansal](https://github.com/nikhilbansal97/)

## **Problem Statement**

* Whenever we stay in a hotel, there's always a concern in every customer's mind whether or not their room will be accessed(say, by the cleaning/service staff) in their absence.
* There is also a speculation or terror in their mind, that they might loose their key or the smart-key-card.

## **Proposed Solution**

Thus, there is a solution that can give the customers their satisfaction and their peace of mind, as well as the hotel staff, their valid proof of honesty.

**SUDOROOMS** is a *keyless* door-lock management architecture that gives weight on TOTAL PRIVACY to the customer.

## **FEATURES**

* Works on local network connection. That means, the door can be unlocked by the customer as long as he is in any part of the hotel where he's able to connect to their network.
* Everytime the room is accessed, there is an SMS received to the customer's registered mobile number.
* When the service staff wants to access the room, a notification is sent to the customer and the access is only granted if the customer accepts it.
* Emergency calls can be placed to some pre-registered users. (Using exotel API)

NOTE:- We were supposed to use Arduino with a wifi module but as it was not working, we had to improvise and reduce our technology track to CONNECTED DEVICES.

## **FUTURE PROSPECTS**

* Instead of using the app, we can use PWA(Progressive WebApps) and thus, there is a good use of the Letreach API too :p
* We have to denote a way of communicating an arduino with the server.

## Mini-Documentation

* HTTP Request Codes + Headers and their meanings

| HTTP Status Codes | Headers             | Meaning                                                    |
|-------------------|---------------------|------------------------------------------------------------|
| 200               | OPENED              | The door is opened successfully                            |
| 200               | CLOSED              | The door is closed successfully                            |
| 304               | FAILED TO OPEN      | Failed to open the door                                    |
| 304               | FAILED TO CLOSE     | Failed to close the door                                   |
| 304               | ALREADY OPEN        | The requested door is already open                         |
| 304               | ALREADY CLOSED      | The requested door is already closed                       |
| 400               | INVALID CALL TO API | The passed parameters are either incorrect of insufficient |

* 

