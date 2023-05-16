# Project-Garage-
This project contains the uses of a database. Adding customers and reservations, changing them and also deleting them.  Using PHP

For project Garage we were able to create our own 'Company' and make a database for this accordingly, only this time we had to make it in PHP instead of C#.
I decided to create a database for a dog-daycare. 

The user starts at the homepage and can choose what it wants to do by navigating through the navigationbar at the top of the webpage. 

ADD A NEW CUSTOMER

When you click on "Nieuwe klant", you'll be lead to a new page where you have to fill in the textboxes with information for that new customer.
such as customer name, adres, postalcode, city, e-mail and of course the name of the pet. Since we love to keep it personalized and not see any of our customers as just a 'number'.
Once you have filled everything in you can click on "Verzenden". The information you filled in will pop up above the textboxes, so you know what you filled in. 
If you want to check if it got added correctly you can click on "naar overzicht" which will lead you to a list of all your customers. 

CUSTOMERS

When you click on "Klant overzicht", you'll be redirected to a new page where you'll see a list of customers and their information displayed. 
You'll also see that every customer has the option to "Wijzig" (edit) their information or to "Verwijderen" (delete) the customer out of your database. 
You also have the ability to show the invoice of that customer, this is a good thing to check if they have any payments they need to make or if they paid for everything they made a reservation for. 

DELETE CUSTOMER

Once you are on "Klant overzicht", you can choose to delete a customer. To do so click on "Verwijder", you'll be redirected to a new page showing you the information of that customer and if you are sure you would like to delete this customer from your database. 
Once you clicked on "Verwijder" again, you'll be redirected to a page that says "The customer is deleted". To go back to the customerlist simply press "naar Overzicht". 

EDIT CUSTOMER

If you want to edit a customer, because they just recently moved or you wrote something incorrectly etc. Go to "Klant overzicht" and click on "Wijzig" next to any customers name you want to edit. 
Once you clicked on "Wijzig" you'll be redirected to a new page showing you textboxes with the information of that customer in them. You can now make the adjustments you want to make. 
When you are done editing your customer's information click on "Verzend" or if you notice you clicked the wrong customer click on "naar overzicht". All the changes you made will be removed like you didn't edit this customer. 
After clikcing on "Verzend" you'll be redirected to a new page showing you the new customer information. To go back to the customerlist simply press "naar Overzicht.

ADD A RESERVATION 

When you want to make a reservation click on "Factuur" next to the name of the customer you want to make a reservation for. You'll be redirected to a new page with all the current reservations the customer has made so far. 
If you want to make a new reservation click on "Reserveren". You'll be send to a new page where you can fill in the following information: 
- klantid
- reserveringsnummer (Reservationnumber)
- productnaam (name of the product)
- categorie
- reserveringsdatum (Date of the reservation)
- prijs (price)
- betaald (if it's paid or not) 

Once you have filled everything in you can click on "Verzend" which will lead you to the page that says "A reservation has been made". 
When you go back to the "Factuur" of that customer you'll see the new reservation has been added. 

For more information about product, their prices and the productnumber, you can click on "overzicht producten" which is displayed in the navigationbar at the top of the screen. 
