LRPSFV
======

Logistics resource planning system for vehicle （整车物流资源计划系统）
Vehicle logistics resource planning system development documentation
=====
A development background
=====
As the process of informatization in China comprehensively promote, in all areas of the process of information in rapid development, and also to promote the process of information in the field of logistics fast forward. Put forward higher requirements: information technology, automation, networking, intelligent and flexible due to the overall progress of the process of information, modern logistics. The increasingly fierce competition in the logistics industry, increasingly high standard of customer needs, the logistics enterprises in order to place in the market, it is necessary to establish an efficient, fast, convenient logistics information system, providing customers with first-class service, and to timely and accurately grasp the needs of customers, the customer needs to make a quick reflected, to the greatest extent mining and optimization of logistics resources and distribution plan to meet the needs of customers in the shortest possible time, in order to establish efficient digital logistics economy.
2 System Analysis
A needs analysis
=======
With the acceleration of the process of the modern logistics information traditional logistics management method has no longer adapted to the current requirements of the development of the logistics industry, Instead this will be based on computer-based network of logistics management methods. A logistics company to adapt to the development of the logistics information process, there is an urgent need to develop a logistics and distribution system, achieved through the network to manage the logistics operation process, not only for business operators to save a lot of manpower, material and financial resources and time, improve logistics system operation efficiency, but also for the development of enterprises laid a good foundation for the enterprise customer in establishing a new image. In accordance with the specific requirements on the actual situation of Angelina logistics and distribution company, and the company, to develop a plan for vehicle logistics resource planning system. Specifically as follows:

    ☑ Web page design requirements nice to be able to show the image of the enterprises.
    ☑ enterprises and customers in establishing a new image.
    ☑ site operation is simple, convenient, and can improve work efficiency.
    ☑ logistics tracking.
    ☑ distribution information in timely fashion.
    ☑ management of delivery vehicles.
    ☑ achieve management of customer information.
    ☑ invoice printing.
2 Feasibility Analysis
========
The vehicle logistics resource distribution planning system not only development make logistics enterprises embark on the road of scientific and network management, but also to the rapid development of enterprises and bring huge economic and technical.
1. Economy
===================
Scientific management methods, convenient operating environment, the business model of the system, will bring more customers to establish a corporate brand image, improve the economic efficiency of enterprises.
(2) technical
=======
Network of logistics management, during operation can quickly and easily find out of the bus source information, customer orders and customer information: cargo tracking to understand the situation of the consignment of enabling businesses according to the actual situation, good operators in the process of the preparatory work, to make timely and accurate adjustment; timely treatment to ensure that the shipper and the consignee of the goods.
3 System Design
========
3 system goals
================
Logistics and distribution network system design, the findings do customers as well as the actual needs of enterprises, the project design should meet the following objectives:

    ☑ interface design elegant, simple operation.
    ☑ functional, a clear structure.
    ☑ source of cars to quickly query information, and different needs to make the best distribution program.
    ☑ able to accurately fill in the order form.
    ☑ Order, Print.
    ☑ able to achieve a single treatment.
    ☑ car source information to add, modify, and delete.
    ☑ able to manage customer information.
    ☑ timely, accurate website maintenance and updating.
    ☑ good database system supports.
    ☑ system is stable, with the Service to the preventive measures.
3.1 Function and Structure
==============
Combination of requirements analysis and system goals, the functional structure of the vehicle logistics and distribution system has been designed. Vehicle logistics functional block diagram of the distribution system and work flow chart.
The vehicle logistics distribution system function block diagram is shown in Figure 3.1.
3.2 development environment
=================
In the development of vehicle logistics resource planning system, the software development environment used in this project are as follows:
    A server-side
===============
    ☑ operating system: Windows 7.
    ☑ server: Apache 6.0.
    ☑ PHP software: PHP5.0.
    ☑ database: MySQL 5.0.
    ☑ development tools: Dreamweaver 8.
    ☑ Browser: IE6 and above.
    ☑ Resolution: 1024 × 768 pixels, the best results.
    2 client
==============
    ☑ Browser: IE6 and above.
    ☑ Resolution: 1024 × 768 pixels, the best results.
4. Database design
===============
The Vehicle Logistics resource planning system must have the support of the database, all data should be stored in the database, to facilitate the administrator vehicles, orders and customer information. If there is no database support, vehicle logistics resource planning system will not make any sense. This section vehicle logistics resource planning system database design in detail.
4.1 database analysis
============
The vehicle logistics resource planning system is an enterprise management system, taking into account the costs of development with reasonable operational flexibility, using a MySQL database is the best option. MySQL database is completely free, it does not require any fees, can be directly downloaded from the Internet free of charge: MySQL database operation is also very convenient, not only can operate in command mode, and with the more popular graphical management tool phpMyAdmin loneliness, can easily achieve the management and operation of the MySQL database.
4.2 database conceptual design
============
According to the sections of the the vehicle logistics resource planning system to do the requirements analysis and system design, sorting out the vehicle logistics resource planning system entity relationship ER diagram. Including the administrator information entities, car source information entities, vehicle log information entities, entities and invoice information entities.
 Administrator information entities
The administrator entity for the storage administrator's login name and password information, including user and password two. E-R diagram of the administrator information entities, such as 3.10.
Home design
============
5.1 Overview of Home
=============
Home of the facade of the entire site, surfers visual interface design website home page should be the main content in the site try to show to the browser have to make browsing faster understanding of the content of the site. The home of the vehicle logistics resource planning system mainly includes the following functions:

    ☑ car source query: vehicle information query time for the customer to select the program of distribution of goods.
    ☑ invoice: mainly used for customer invoice information to fill.
    ☑ receipt invoice to confirm: mainly used for the distribution of goods return receipt confirmation.
    ☑ invoice queries: mainly used to query the invoice.
    ☑ customer information management: mainly used to manage customer information.
    ☑ car source information management: mainly used for the management of enterprises owned vehicle information.
    ☑ change the password: mainly used to modify the administrator login password.
    As used herein, the frame structure is not a Frame frame, but applications SWITCH statement, the nested form the framework to achieve the effect.
6 car source information query module design
===============
The 6.1 cheyuan query module Overview
=============
Car source information query module is based on the location provide customers with the distribution of goods from a database query about the route of the vehicle, providing customers with a reasonable and optimal delivery routes to finalize orders shipped. The operation process is shown in Figure 3.23.
6.2 the car source information query module Technical Analysis
==============
The car source information query module's main function is to query the use of vehicles, providing customers with the most complete fitness goods delivery route. The key technology of the application of natural query methods, in order to provide the most appropriate, the most satisfaction, the most efficient delivery service used here is fuzzy query technology.
By querying technology, as long as the customer places of departure and arrival points of the distribution of goods, the administrator can be extracted from the database of all vehicle information associated with the route, including the carrying capacity of the vehicle, whether the vehicle is occupied and the use of vehicles, glance, customers can select the vehicle according to the actual situation (time, quantity of goods, routes, etc.), after confirmation fill in the invoice.
Fuzzy query technology in the car_select.php file completed, the first to establish a connection with the database; and then create a form to to set two the text box select1 and select2 for submitting the places of departure and arrival points, the values ​​in the table to the current page; finally write PHP script statement, the data obtained in the form of conditions, like Fuzzy query is performed, the information from the database table specified query conditions, and the information in the query to the page. The key code of the program are as follows:
    Code tips:
========
     ❶ select1: specify the place of departure.
     ❷ select2: designated arrival points.
     ❸ IF statement: the judgment variable to be retrieved from the form is true.
     ❹ like: perform fuzzy query, meet the requirements of the data read from the database.
6.3 car source information query module implementation process
===============
The car source information query function to achieve by car_select.php file, first establish a connection with the database; then create a single form, the customer address information submitted to this page, as a condition of the query; finally write PHP script statement in recognition of to obtain location data as a condition to perform like fuzzy query, the query from the database table specified conditions for the exercise information, and the information in the query to the page.
6.4 unit tests
=============
In the process of testing the vehicle logistics resource planning system query module, when the input specified point of departure and arrival points submitted, program error, did not find the records meet the criteria. Error with the database, you should start looking for the cause of the error from the database, first make sure the database used in the program, the writing of data tables and fields are correct, check carefully, if no problems are found; then confirm whether to use a select query format correct, generally in writing select query using likely erroneous statement format, did not perform like Fuzzy query parameters on both sides with single quotation marks, resulting program type mismatch error. Modified correctly after the error message no longer appears. This function of the unit test is completed.
7 invoice management module design
===================
7.1 invoice management module Overview
=============
Invoice management module includes to fill invoice, invoice queries, shipping a single printing and invoice delete. The main function of the invoice management module is shown in Figure 3.
7.2 invoice management module Technical Analysis
==============
How can I play the most important function of the function? Designers not only to be able to understand from the surface of the function and role of the function, and to be able to support a divergent way of thinking to consider the issue.
Invoice management module is applied to an invoice number, the number is a unique identifier of the invoice does not allow duplicate. In the preparation of the program of this number is generated, the preferred solution is the application of random function to get the random number as a number, which is one of the most direct way, but taking into account the invoice number not only unique, but also it has a certain iconic, consider using a random function from a point of view on some not suitable because it does not have a certain iconic. In this case, if the application date () function, you can achieve the above-mentioned requirements, not only the ID is unique, but there are rules to follow. In order to better understand the divergence of programming ideas, first date () function. The syntax is as follows:
String date (string format, int timestamp)
This function returns the parameters timestamp string according to the specified format string parameters timestamp is first, the default value of time (), if no timestamp is the current local time.
Date () function parameter format formatting options, such as shown in Table 3.1.
  Parameter Description
=============
      In a lowercase morning and afternoon return from the value of am or pm
      A uppercase morning and afternoon return from the value of the AM or PM
      B Swatch Internet standards, the return value from 000 to 999
      d first few days of the month, 2 digits of the leading zero, the return value from 01 to 31
      D the first few days of the week, text formatting, three letters, the return value of Mon ~ Sun
      F in January, the full text format, the return value January to December
      g-hour, 12-hour format, no leading zeros, the return value from 1 to 12
      G-hour, 24-hour format, no leading zeros, the return value from 1 to 23
      h-hour, 12-hour format, with leading zeros, the return value from 01 to 12
      H-hour, 24-hour format, with leading zeros, the return value from 01 to 23
      i have a leading zero number of minutes, the return value from 00 to 59
      I determine whether daylight saving, the return value if daylight saving time is 1, otherwise 0
      the j first few days of the month without leading zeros, the return value from 1 to 31
      l number of weeks, the full text format, the return value from Sunday to Saturday
      L determines whether a leap year, the return value if the leap year is 1, otherwise 0
      m numbers indicate the month, leading zero, the return value from 01 to 12
      M 3-letter abbreviation of the month represented without leading zeros, the return value Jan to Dec
      n numbers indicate the month without leading zeros, the return value from 1 to 12
      the number of hours o ahead of GMT
      r RFC822 format date
      s Seconds with leading zero, the return value from 00 to 59
      English suffix S day of the month, 2 characters
      t specifies the number of days the month should
      T native time zone
      U since the start of the number of seconds from the UNIX epoch
      w the first few days of the week, the numbers indicate, the return value from 0 to 6
      W ISO to 8610 format Year for the first few weeks in the week starting on Monday
      Y 4-digit complete representation of the year such as 2012, the return value
      y 2-digit year, the return value, such as 888
      z Year for the first few days, the return value from 0 to 366
      Z-day offset when the number of seconds.
Invoice fill a single module in the system is the application date () function to get the current time as the invoice number and vehicle ID.
7.3 Shipping the implementation process of single-filling orders
===========
Invoice fill customers fill in determining the logistics and route after a goods delivery details documents, including invoice number, license plate number, the owner's phone, the shipper, the shipper phone, shipping address, payment method , the consignee, the consignee phone, the consignee address and delivery instructions. Invoice fill in the results shown in Figure 3.29.
Invoice fill orders be achieved through insert_dds.php files to complete first generates a random order number, and then create a single form, the data in the form submitted to the database. Use in the Insert_dds.php file form elements shown in Table 3.2.
Table 3.2 invoice filling orders form elements
The name of the element type attribute meaning
7.4 Invoices query process
============
The invoice query is to invoice easy to find and deal with the design of a function, can accurately find the specified invoice, and also set an invoice to delete, you can have lapsed or voided invoice to delete. Its theory is to pinpoint conditions on the invoice number or the name of the consignor conditional query, and then the results of the query output to the page. The result is shown in Figure 3.30.
Invoices query to achieve mainly through completion of the hwys.php file, first establish a connection with the database, and then create the a form form1 through the form to submit the query conditions, and can choose an exact search or fuzzy, and finally submitted according to the Form1 form data, execute a query from the database to read out the contents of the invoice character conditions. The key code of the program are as follows:
Invoice to delete operation by fhd_qr.php file to complete the delete operation, mainly based on the invoice ID hyperlink.
7.5 invoice printing implementation process
=============
The place appointed single printing technology printing technology mainly through the frame to complete, i.e. only print the contents of the frame, while other content of the page does not print. The principle is: First in the Insert_dd.php file to create a floating frame, set to specify the print range, and connected to want to print insert_dds.php file, and then output to be printed in the specified file. Finally, onlick The the event calls parent.content.focus () and window.print () method to achieve print function.
7.6 unit tests
=============
During invoice fill single module testing process, when you open the invoice to fill the pages of a single module, the results of its operation is shown in Figure 3.32 shows, then the normal function of the module.
8. Single receipt and acceptance management module design
================
8.1 receipt of a single module Technical Analysis
==============
The receipt of a single module, it is necessary to confirm a single receipt must first find the specified invoice, and verify its contents. Application query is based on the invoice number, d execute a query qualified data read from the database, the data read from the database, the main application mysql_query (), mysql_num_rows (), and mysql_fetch_arry () function .
First, through the mysql_query () function executes a select query, and then through the mysql_num_rows () function to determine whether the results of the query value, if no value output you are looking for invoice number does not exist! "Value rvtfmysql_fetch_array ( ) function the output database query to the data.
Mysql_query () function to the currently active database connection identifier associated with the specified server send a MySQL query.
Using the method outputs a database of data. If we add the while loop, then you can complete all qualifying cycle of the output database.
The the application while loop to read the data in the database, for example, here to read data in the tb_shopping table the following code:
8.2 a single receipt and acceptance of the implementation process of the module
=============
A single receipt and acceptance module main function is to confirm the completion of the distribution of goods, the results shown in Figure 3.35.
A single receipt and acceptance module implementation process: First the select_dhd.php page query according to the invoice number specified invoice, invoice verification, and then click the "order confirmation" hyperlink to achieve acceptance of a single receipt. The key code is as follows:
Hyperlink the fhd_qr.php page invoice number is updated invoice type "1", empty the corresponding vehicle usage logs. The key code of the program are as follows:

9 basic information management module Overview
============
The 9.1 basic information management module Overview
==============
Customer information management, is included in the basic information management module is used to add customer information and delete customer information; car source information management, is mainly used for the car source information management, the car source information to add, modify, and delete functions; administrator information management used to modify the administrator's password. Basic information management module functions illustrated in Figure 3.36.

9.2 Basic information management module Technical Analysis
================
Block to modify the administrator password used in the process of processing the password is the password to modify object-oriented technology.
Object-oriented technology key class creation, first create a chkuser class, which defines five members of the data, modify the administrator password the administrator name ($ admin_user), the administrator password ($ admin_pass), management member of the new password ($ admin_new_pass), administrator password confirmation ($ admin_new_pass2) and verification code ($ YAM), then application chkuser function initialization of data members, the modify of the final application data member function chkinput password.

9.3 customer information management in the implementation process
================
Customer information management module is done mainly through customer.php, customer_ok.php, and delete_customer.php file. First by customer.php file to add customer information, and the output of all customer information in the database, set the hyperlink to delete customer information. Output customer details the key code is as follows:
The 9.4 cheyuan information management implementation process
===========
The car source information management module to achieve the vehicle information to add, modify and delete operations. The car source information management module of the results is shown in Figure 3.38.
Car source information management module consists of two files. Car.php file, mainly used to output the vehicle information and submit the information of the vehicle to form the file. Set Form2 form, according to the license plate number read from the database corresponding vehicle information, so as to realize the vehicle modify, or delete operation; Set Form1 form is used to display vehicle information read from the database and vehicle information directly add to database.
Another is car_insert_ok.php file, the file for processing the data submitted in the form. First of all, connect to the database, then be judged based on the values ​​submitted in the form when the button $ Submit a value of "submission", will be submitted to the data stored in the specified data table; when the value of the button $ submit2 the Modify, Update statement to update the vehicle information; when the button value of $ Submit4 is "delete", perform the delete statement will delete the specified vehicle information. The key code of the program are as follows:
10. Development skills and Difficulties
=============
The 10.1 applications stored procedure administrator login
=========
In vehicle logistics resource planning system, the administrator login is achieved through stored procedures. MySQL 5.0 or later version supports stored procedures, stored procedures, consistency, efficiency, security and architecture features.
10.2 Application of regular expressions to validate phone number
============
In vehicle logistics resource planning system, to confirm the entered phone number is correct or not is a non-important question, if the customer when filling the order using the wrong phone number, it will bring a lot of unnecessary trouble, so fill in the phone number, must pay attention to the accuracy of the phone number. In order to better ensure the accuracy of the telephone number input, through its program control.
11 report printing technology
==============
Report printing techniques to realize, through the web printing, print Word, Excel printing and printing CSS style. The printing method is applied in this project through the Web, print, and print specified in the framework of content. Next, a CSS style to print the specified page content.
CSS style media type specified by the CSS style print page content. Media type. Media type CSS property media type, for direct introduction of media properties. The syntax is as follows:
@ Media screen | print | projection | braille | aural | tv | handheld | all

      Table 3.6 Media Type Parameter Description
========
      Parameter Description
      screen defaults, submitted to the computer screen
      print refers to output to a printer
      projection of submissions in the projector
      braille submissions in the braille tactile feedback devices
      aural voice synthesizer
      TV TV types of media
      Handheld refers to a handheld display device
      all for all media
Customer information in the project, for example, explain CSS style print the specified procedure: First, write for the control of specified content does not print CSS style, the procedure is as follows:
Finally, set a div tag, create hyperlinks, onclick event call window.print () method PrintView () function page printing and print preview function.
12 systematic summary
==============
This chapter is from the actual needs of the angle of the vehicle logistics resource planning system, the development of a complete vehicle logistics resource planning system, explain in detail the the vehicle logistics resource planning system development process, from the initial needs analysis, feasibility analysis, to the system design, database design, which focused vehicle source information query module, invoice management module and a single receipt and acceptance management module design.


整车物流资源计划系统开发文档
=====
1开发背景
=====
　　　随着我国信息化进程的全面推进，各领域的信息化进程都在飞速的发展，同样也推动着 物流领域的信息化进程飞快的向前发展。由于信息化进程的全面推进，对现代物流提出更高的要求：信息化、自动化、网络化、智能化和柔性化等。物流行业的竞争日益激烈，客户需求的标准也越来越高，物流企业要想在市场中占有一席之地，必须要建立一个高效、快捷、方便的物流信息化系统，为客户提供一流的服务，并且能够及时准确地掌握客户的需求，对客户的需求做出快速的反映，在最短的时间内以最大的限度挖掘和优化物流资源配送计划来满足客户的需求，从而建立高效的数字化物流经济。
2系统分析
======
１需求分析
=======
随着现代物流信息化进程的加快，传统的物流管理方式已经不再适应当前物流发展的要求，取而代这的将是以计算机为基础的网络化物流管理方式。某物流配送公司为适应物流信息化进程的发展，急需开发一个物流配送系统，通过网络来实现对物流操作流程进行管理，不但为企业的运营过程节省大量的人力、物力、财力和时间，提高物流系统运行的效率，而且为企业在客户中树立一个全新的形象，为企业的发展奠定一个良好的基础。现根据对安吉物流配送公司的实际情况，以及公司的具体要求，制定出整车物流资源计划系统的规划方案。具体如下：

        ☑ 网站页面设计要求美观大方，能够展示企事业形象。
        ☑ 为企事业在客户中树立一个全新的形象。
        ☑ 网站的操作流程简单、方便，能够提高工作效率。
        ☑ 提供物流配送的全程跟踪。
        ☑ 提供配送信息的及时查询。
        ☑ 实现对配送车辆的管理。
    　　☑ 实现对客户信息的管理。
    　　☑ 实现发货单打印的功能。
２可行性分析
========
    整车物流资源配送计划系统的开发不但能使物流企事业走上科学化、网络化管理的道路，而且能够为企事业带来巨大的经济效益和技术上飞速的发展。
1.经济性
===================
    科学的管理方法，便捷的操作环境，系统的经营模式，将为企业带来更多的客户资源，树立企业的品牌形象，提高企业的经济效益。
2.技术性
=======
    网络化的物流管理方式，在操作过程中能够快捷地查找出车源信息、客户订单以及客户信息：能够对货物进行全程跟踪，了解货物的托运情况，从而使企业能够根据实际情况，做好运营过程中的各项准备工作，作出及时准确的调整；能够保证托运人以及收货人对货物进行及时的处理。
３.系统设计
========
3系统目标
================

    结合目前网络上物流配送系统的设计方案，对客户做的调查结果以及企业的实际需求，本项目在设计时应该满足以下目标：
        　　☑ 界面设计美观大方、操作简单。
        　　☑ 功能完善、结构清晰。
        　　☑ 能够快速查询车源信息，并对不同需求做出最优配送方案。
        　　☑ 能够准确填写订单。
        　　☑ 能够实现订单查询、打印。
        　　☑ 能够实现对回单处理。
        　　☑ 能够对车源信息进行添加、修改和删除。
        　　☑ 能够对客户信息进行管理。
        　　☑ 能够及时、准确地对网站进行维护和更新。
        　　☑ 良好的数据库系统支持。
        　　☑ 系统运行稳定，具务良好的防范措施。
3.1系统功能结构
==============
        　　　结合需求分析和系统目标中的内容，整车物流配送系统的功能结构已经设计完成。整车物流配送系统的功能模块结构图和工作流程图。
整车物流配送系统的功能模块结构图如图3.1所示。
3.2开发环境
=================

        　　　在开发整车物流资源计划系统时，该项目使用的软件开发环境如下：
        　　　1.服务器端
===============
        　　　  ☑ 操作系统：Windows 7.
        　　 　☑ 服务器：Apache 6.0。
        　  　☑ PHP软件：PHP5.0。
        　　 　☑ 数据库：MySQL 5.0。
       　　  　☑ 开发工具：Dreamweaver 8。
       　　  　☑ 浏览器：IE6.0及以上版本。
       　　  　☑ 分辨率：最佳效果1024×768像素。
            2.客户端
==============
        　　　☑ 浏览器：IE6.0及以上版本。
        　　　☑ 分辨率：最佳效果1024×768像素。
4.数据库设计
===============
        　　　整车物流资源计划系统必须拥有数据库的支持，所有数据都应该存储到数据库中，便于管理员车辆、订单和客户的信息。如果没有数据库的支持，那么整车物流资源计划系统将没有任何意义。本节将对整车物流资源计划系统的数据库设计进行详细介绍。
4.1数据库分析
============
        　　　整车物流资源计划系统是一个企业管理系统，考虑到开发的成本、搭配的合理性以及操作的灵活性等，使用MySQL数据库是最佳的选择。MySQL数据库是完全免费的，使用它不需要任何费用，可以直接从网上免费下载：MySQl数据库的操作也非常方便，不但可以在命令模式下操作，而且配备目前比较流行的图形化管理工具寂寞phpMyAdmin，能够轻松地实现对MySQL数据库的管理和操作。
4.2数据库概念设计
============
        　　　根据上述各节对整车物流资源计划系统做的需求分析和系统设计，整理出整车物流资源计划系统的实体关系E-R图。其中包括管理员信息实体、车源信息实体、车辆日志信息实体、客户信息实体和发货单信息实体。
              管理员信息实体
        　　　管理员信息实体用于存储管理员的登录名称和密码信息，包括用户和密码两项内容。管理员信息实体的E-R图如3.10 所示。
5.网站首页设计
============
5.1网站首页概述
=============
        　　　网站首页是整个网站的门面，是浏览者第一视觉界面，所以在设计网站的首页时应该将网站中主要的内容尽量展示给浏览都，让浏览都能够更快地了解网站的内容。整车物流资源计划系统的首页主要包括如下功能：
        　　　☑ 车源信息查询：主要实现车辆信息查询，及时为客户选择货物配送的方案。
        　　　☑ 发货单：主要用于客户发货单信息填写。
        　　　☑ 回执发货单确认：主要用于对货物配送回执单的确认。
        　　　☑ 发货单查询：主要用于对发货单进行查询。
        　　　☑ 客户信息管理：主要用于对客户信息进行管理。
        　　　☑ 车源信息管理：主要用于对企业拥有的车辆信息进行管理。
        　　　☑ 修改密码：主要用于对管理员登录的密码进行修改。
        　　　这里使用的框架结构不是Frame框架，而是应用SWITCH语句，加上表格的嵌套实现的框架效果。
6.车源信息查询模块设计
===============
6.1车源信息查询模块概述
=============
　　　车源信息查询模块的功能是根据客户提供的货物配送的地点，从数据库中查询有关该路线的车辆，为客户提供一个合理并且最优的配送路线，最后确定发货订单。操作流程如图3.23所示。
6.2车源信息查询模块技术分析
==============
        车源信息查询模块的主要功能就是查询车辆的使用信息，为客户提供最全适的货物配送路线。其中应用的关键技术自然就是查询方法，为了给客户提供最合适、最满意、最快捷的配送服务，这里使用的是模糊查询技术。
        通过查询技术，只要客户提出配送货物的出发地点和到达地点，管理员就可以从数据库中提取出所有与该路线相关的车辆信息，包括车辆的承载能力、车辆是 否被占用和车辆的使用情况，都一目了然，客户可以根据实际的情况（时间、货物数量、路线等）选择车辆，确认后填写发货单。
        模糊查询技术的实现是在car_select.php文件中完成的，首先要与数据库建立连接；然后创建一个form表单，设置两个文本框select1和select2用于提交出发地点和到达地点，将表的值提交到当前页；最后编写PHP脚本语句，以表单中获取的数据为条件，执行like模糊查询，从数据库的指定表中查询符合条件的信息，并且将查询出的信息显示到页面中。程序的关键代码如下：
        代码贴士：
========
        ❶select1:指定出发地点。
        ❷select2:指定到达地点。
        ❸IF语句：判断从表单中获取的变量是否为真。
        ❹like:执行模糊查询，从数据库中读取符合条件的数据。
6.3车源信息查询模块的实现过程
===============
　　　车源信息查询功能的实现通过car_select.php文件来完成，首先与数据库建立连接；然后创建一个form表单，将客户的地址信息提交到当前页，作为查询的条件；最后编写PHP脚本语句，以表彰中获取的地点数据为条件，执行like模糊查询，从数据库的指定表中查询行使条件的信息，并且将查询出的信息显示到页面中。
6.4单元测试
=============
　　　在对整车物流资源计划系统查询模块进行测试的过程中，如果当输入指定的出发点和到达地点进行提交后，出现程序出错，没有找到符合条件的记录。说明错误与数据库有关，应该从数据库开始查找错误的原因，首先确定程序中使用的数据库、数据表和字段的书写是否正确，仔细核对，如果没有发现问题；然后确认使用有select查询语句的格式是否正确，一般在编写select查询语句时使用了错误的语句格式的可能性比较大，在执行like模糊查询时没有将参数的两侧加上单引号，从而导致程序中类型不匹配的错误。修改正确后就不会再出现错误信息了。在此对本单元的功能测试完成。
7.发货单管理模块设计
===================
7.1发货单管理模块概述
=============
　　　发货单管理模块主要包括发货单的填写、发货单查询、发货单打印和发货单删除。发货单管理模块的主要功能如图3.所示。
7.2发货单管理模块技术分析
==============
    如何才能发挥函数的最大作用？设计者不但要能够从表面理解函数的功能和作用，而且要能够以一种发散的思维方式支考虑问题。
    在发货单管理模块中应用到一个发货单的编号，该编号是发货单的唯一标识，不允许存在重复。在编写生成这个编号的程序时，首选方案是应用随机函数获取随机的数字作为编号， 这是一个最直接的做法，但是考虑到发货单编号不但具有唯一性，而且还要使其具有一定的标志性，从个角度考虑使用随机函数就有些不适合，因为其不具一定的标志性。这时，如果应用date()函数则可以达到上述所说的要求，不但编号具有唯一性，而且还有规律可循。为了能够更好的理解这种发散性的编程思想，首先介绍一下date()函数。语法格式如下：
    String date(string format,int timestamp)
    该函数返回将参数timestamp按照指定格式字符串而产生的字符串，其中的参数timestamp是可先的，默认值为time()，即如果没有给出时间戳则使用本地当前时间。
    Date()函数的参数format的格式化选项如表3.1所示。
  参 数	说 明
=============
          a	小写的上午和下午，返回从值am或pm
          A	大写的上午和下午，返回从值AM或PM
          B	Swatch Internet标准时，返回值000~999
          d	月份中的第几天，有前导零的2位数字，返回值01~31
          D	星期中的第几天，文本格式，3个字母，返回值 Mon~Sun
          F	月份，完整的文本格式，返回值January~December
              g	小时，12小时格式，没有导零，返回值1~12
          G	小时，24小时格式，没有导零，返回值1~23
          h	小时，12小时格式，有前导零，返回值01~12

　　　在本系统中的发货单填单模块中就是应用date（）函数获取当前时间和车辆ID作为发货单的编号。
7.3发货单填单的实现过程
===========
        　　　发货单的填写是客户在确定物流配送路线以后填写的一个货物配送详细信息单据，内容包括发货单编号、车牌号码、车主电话、发货人、发货人电话、发货地址、付款方式、收货人、收货人电话、收货人地址和配送说明。发货单填写的运行结果如图3.29所示。
        　　发货单填单的实现通过insert_dds.php文件来完成，首先随机生成一个订单编号，然后创建一个form表单，最后将表单中的数据提交到数据库中。在Insert_dds.php文件中的使用的重要表单无素如表3.2所示。
        表3.2 发货单填单中使用的重要表单元素
        名称	元素类型	重要属性	含义
7.4发货单查询的实现过程
============
    　　   　发货单查询是为了便于对发货单进行查找以及处理而设计的一个功能，通过其可以准确地查找到指定的发货单，并且还设置一个发货单删除的功能，可以对已经失效或者作废的发货单进行删除。其实现的原理主要是通过以发货单编号为条件的精确查找或者以发货人姓名为条件查询，然后将查询的结果输出到页面中。运行结果如图3.30所示。
        　　　发货单查询的实现主要通过hwys.php文件完成，首先与数据库建立连接，然后创建一个表单form1，通过该表单来提交查询的条件，可以选择精确查找或者模糊查询，最后根据form1表单中提交的数据，执行查询语句，从数据库中读取出符全条件的发货单的内容。程序的关键代码如下：
        　　　发货单删除的操作通过fhd_qr.php文件来完成，主要根据超链接中提供的发货单ID执行删除的操作。
7.5发货单打印的实现过程
=============
　　这里的发货单打印技术主要通过框架打印技术来完成，即只打印框架中的内容，而网页中其他的内容不打印。 实现原理是：首先在Insert_dd.php文件中创建一个浮动框架，设置要指定打印内容的范围，并且连接到 要打印的insert_dds.php文件，然后在指定的文件中输出要打印的内容，最后应用onlick事件调用parent.content.focus()和window.print()方法实现打印功能。
7.6单元测试
=============
　　　在进行发货单填单模块的测试过程中，当打开发货单填单模块的页面时，其运行结果如图3.32所示，则说明本模块功能正常。
8.回执单验收管理模块设计
================
8.1回执单模块技术分析
==============
　　　在回执单模块中，要对回执单进行确认首先要查找到指定的发货单，并且对其内容进行核实。这里应用的是根据发货单的编号进行查询，从数据库中读取出符合条件的数据d执行查询语句、从数据库中读取数据时，主要应用mysql_query()、mysql_num_rows()和mysql_fetch_arry()函数。
　　　首先通过mysql_query()函数执行一个select查询语句，然后通过mysql_num_rows()函数判断查询的结果是否有值，如果没有值则输出“您查找的发货单编号不存在！”,如果有值则rvtfmysql_fetch_array()函数，输出数据库中查询到的数据。
　　　Mysql_query()函数向与指定的连接标识符关联的服务器中的当前活动数据库发送一条mysql查询。
　　　使用该种方法输出的只是数据库中的一条数据。如果加上while循环语句，那么就可以完成数据库中所有符合条件的循环输出。
　　　应用while循环语句读取数据库中的数据，这里以读取tb_shopping表中的数据为例，程序代码如下：
8.2回执单验收模块的实现过程
=============
　　　回执单验收模块的主要功能就是对货物配送完成确认，运行结果如图3.35所示。
　　　回执单验收模块的实现过程是：首先在select_dhd.php页中根据发货单的编号查询出指定的发货单，对发货单进行核实，然后单击”发货订单确认“超链接，实现回执单的验收。关键代码如下：
　　最后在fhd_qr.php页根据超链接提供的发货单编号更新发货单类型为”1“，清空对应车辆的使用日志。其程序的关键代码如下：

9.基础信息管理模块概述
============
9.1基础信息管理模块概述
==============
　　　基础信息管理模块主要包括客户信息管理，用于添加客户信息和删除客户信息；车源信息管理，主要用于对车源信息进行管理，实现车源信息的添加、修改和删除功能；管理员信息管理，用于修改管理员的密码。基础信息管理模块的功能结果如图3.36所示。

9.2基础信息管理模块技术分析
================
　　修改管理员密码的砌块中，在对密码进行处理的过程中用的是面向对象技术实现密码的修改。
　　面向对象技术的关键就是类的创建，首先创建一个chkuser类，其中定义5个数据成员，实现对管理员密码的修改，分别是管理员名称（$admin_user)、管理员密码（$admin_pass)、管理员新密码（$admin_new_pass)、管理员新密码确认（$admin_new_pass2)和验证码（$yam),然后应用chkuser函数实现数据成员的初始化，最后应用数据成员函数chkinput实现密码的修改。
　　
9.3客户信息管理的实现过程
================
　　　客户信息管理模块主要通过customer.php、customer_ok.php和delete_customer.php文件来完成。首先通过customer.php文件来添加客户信息，并且输出数据库中的所有客户信息，设置删除客户信息的超链接。其输出客户详细信息的关键代码如下：
9.4车源信息管理的实现过程
===========
　　　车源信息管理模块主要实现对车辆信息添加、修改和、删除操作。车源信息管理模块的运行结果如图3.38所示。
　　　车源信息管理模块主要由两个文件组成。一个是car.php文件，以表单文件为主用于输出车辆的信息和提交车辆的信息。设置form2表单，根据车牌号码从数据库中读取对应车辆的信息，进而实现对该车辆信息的修改或者删除操作；设置form1表单，用于显示从数据库中读取的车辆信息和直接添加车辆信息到数据库。
　　　另一个是car_insert_ok.php文件，通过该文件实现对表单中提交的数据进行处理。首先连接数据库，然后根据表单中提交的值进行判断，当按钮$Submit的值为“提交时”，将提交的数据存储到指定的数据表中；当按钮$Submit2的值为“修改”时，则更新语句，对车辆的信息进行更新；当按钮$Submit4的值为“删除”时，则执行删除语句，将指定的车辆信息删除。程序关键代码如下：
10.开发技巧与难点分析
=============
10.1应用存储过程实现管理员登录
=========
　　　在整车物流资源计划系统中，管理员登录是通过存储过程来实现的。MySQL 5.0以后的版本中开始支持存储过程，存储过程具有一致性、高效性、安全性和体系结构等特点。
10.2应用正则表达式验证电话号码
============
　　在整车物流资源计划系统中，确认输入的电话号码正确与否是一个非重要的问题，如果客户在填写订单时使用了错误的电话号码，那么就会带来很多不必要的麻烦，所以在填写电话号码时一定要注意电话号码的准确性。为了更好地确保电话号码输入的准确性，可以通过程序对其进行控制。
11.报表打印技术
==============
    　　报表打印技术的实现方法很多，可以通过web打印、通过Word打印、通过Excel打印和通过CSS样式打印等。在本项目中应用的打印方式是通过Web打印，并且是打印指定框架中的内容。下面再介绍一种通过CSS样式来打印页面中指定内容的方法。
    　　通过CSS样式打印页面中指定内容主要会用CSS样式的media类型。Media类型。Media类型是CSS属性媒体类型，用于直接引入媒体的属性。语法格式如下：
    　　@media screen | print | projection | braille | aural | tv | handheld | all
        表3.6 media类型的参数说明
========
          参 数	说   明
          screen	默认值，指提交到计算机屏幕
          print	指输出到打印机
          projection	指提交到投影机
          braille	指提交到凸字触觉感知设备
          aural	指语音电子合成器
          tv	电视类型的媒体
          handheld	指手持式显示设备
          all	用于所有媒体
        　　这里以项目中的客户信息为例，讲解通过CSS样式打印指定内容的操作过程：首先编写用于控制指定内容的不打印CSS样式，程序如下：
        　　最后设置一个div标签，建立超链接，应用onclick事件调用window.print（）方法和printview()函数实现页面的打印和打印预览的功能。
12.系统总结
==============
　　本章从整车物流资源计划系统的实际需求角度出发，开发一个完整的整车物流资源计划系统，详细地讲解整车物流资源计划系统的开发流程，从最初的需求分析、可行性分析，到系统的设计、数据库的设计，其中重点突出车源信息查询模块、发货单管理模块和回执单验收管理模块的设计。

东华理工大学IT网项目组相关链接
==========================================================================================================================
东华理工大学IT网：
  http://ecit-it.com
  http://huidaoli.web-164.com
东华理工大学IT网团队项目协同办公室：
  http://ecit-it.tudu.com/
东华理工大学IT网站官方微博：
  http://e.weibo.com/1910620900/ 
  http://weibo.com/lhd20111102
东华理工大学IT网站博客：
  http://blog.sina.com.cn/ulihd
东华理工大学IT网站博客手机端下载链接：
  http://s.hudee.com/1910620900
东华理工大学IT网移动客户端下载：
  http://app.zhui.cn/Mobile/Down.aspx?SID=79935&SwitchOS=1
  http://ecit-it.com/a/ITchuangyi/20130429/1422.html
东华理工大学IT网网站站长简历：
  http://ecit-it.com/a/ITjiuye/20130428/1395.html
东华理工大学IT网QQ交流群：
  37604517
