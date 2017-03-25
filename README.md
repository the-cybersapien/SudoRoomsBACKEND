# SUDOROOMS
**Backend API For the Sudo Rooms Application at Clash Hacks 2k17**

## **Problem Statement**

* Whenever we stay in a hotel, there's always a concern in every customer's mind whether or not their room will be accessed(say, by the cleaning/service staff) in their absence.
* There is also a speculation or terror in their mind, that they might loose their key or the smart-key-card.

## **Proposed Solution**

Thus, there is a solution that can give the customers their satisfaction and their peace of mind, as well as the hotel staff, their valid proof of honesty.

**SUDOROOMS** is a *keyless* door-lock management architecture that gives weight on TOTAL PRIVACY of the customer.

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

