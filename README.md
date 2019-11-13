# Learning_WebAPI
**Magento 2 Learning | WebAPI**


1. API is the acronym for Application Programming Interface, which is a software intermediary that allows two applications to talk to each other. Each time you use an app like Facebook, send an instant message, or check the weather on your phone, you’re using an API.

**Example API:**

When you use an application on your mobile phone, the application connects to the Internet and sends data to a server. The server then retrieves that data, interprets it, performs the necessary actions and sends it back to your phone. The application then interprets that data and presents you with the information you wanted in a readable way. This is what an API is - all of this happens via API.

To explain this better, let us take a familiar example.

Imagine you’re sitting at a table in a restaurant with a menu of choices to order from. The kitchen is the part of the “system” that will prepare your order. What is missing is the critical link to communicate your order to the kitchen and deliver your food back to your table. That’s where the waiter or API comes in. The waiter is the messenger – or API – that takes your request or order and tells the kitchen – the system – what to do. Then the waiter delivers the response back to you; in this case, it is the food.

**SPI:**

Serial Peripheral Interface (SPI) is an interface bus commonly used to send data between microcontrollers and small peripherals such as shift registers, sensors, and SD cards. It uses separate clock and data lines, along with a select line to choose the device you wish to talk to.

**API vs SPI:**

API is a mean for accessing a provided service/function, SPI is way to inject, extend or alter the behavior.

API stands for Application Programming Interface, and is a mean for accessing a service/function provided by some kind of software or a platform. API is normally target for clients to access a service and its has the following properties:

API is a programmatic way of accessing a service to achieve a certain behavior or output;
from API evolution point of view, addition is no problem at all for clients;
but API’s once utilized by clients it can not (and should not) be altered / deleted unless there are an appropriate communications, since its a complete degradation of the client expectation.
SPI stands for Service Provider Interface, and is way to inject, extend or alter the behavior for software or a platform. SPI is targeted for providers and has the following properties:

SPI is a way to extend / alter the behavior of a software or a platform (programmable vs. programmatic);
SPI evolution is different that API evolution, in SPI removal is not an issue;
addition of SPI interfaces will cause problems and may break existing implementations.
Put differently, the API tells you what a specific class/method does for you and the SPI tells you what you must do to conform. So:

the API is the description of classes/interfaces/methods/… that you call and use to achieve a goal;
the SPI is the description of classes/interfaces/methods/… that you extend and implement to achieve a goal.
Usually API and SPI are separate. For example in JDBC the Driver class is part of the SPI: if you simply want to use JDBC, you don’t need to use it directly, but everyone who implements a JDBC driver must implement that class.

Sometimes they overlap, however. The Connection interface is both SPI and API: you use it routinely when you use a JDBC driver and it needs to be implemented by the developer of the JDBC driver.

2. Simple Object Access Protocol (SOAP) and Representational State Transfer (REST) are two answers to the same question: how to access Web services. The choice initially may seem easy, but at times it can be surprisingly difficult.

SOAP is a standards-based Web services access protocol that has been around for a while and enjoys all of the benefits of long-term use. Originally developed by Microsoft, SOAP really isn’t as simple as the acronym would suggest.

REST is the newcomer to the block. It seeks to fix the problems with SOAP and provide a truly simple method of accessing Web services. However, sometimes SOAP is actually easier to use; sometimes REST has problems of its own. Both techniques have issues to consider when deciding which protocol to use.

Before I go any further, it’s important to clarify that while both SOAP and REST share similarities over the HTTP protocol, SOAP is a more rigid set of messaging patterns than REST. The rules in SOAP are important because without these rules, you can’t achieve any level of standardization. REST as an architecture style does not require processing and is naturally more flexible. Both SOAP and REST rely on well-established rules that everyone has agreed to abide by in the interest of exchanging information.

**SOAP:**

SOAP relies exclusively on XML to provide messaging services. Microsoft originally developed SOAP to take the place of older technologies that don’t work well on the Internet such as the Distributed Component Object Model (DCOM) and Common Object Request Broker Architecture (CORBA). These technologies fail because they rely on binary messaging; the XML messaging that SOAP employs works better over the Internet.

After an initial release, Microsoft submitted SOAP to the Internet Engineering Task Force (IETF) where it was standardized. SOAP is designed to support expansion, so it has all sorts of other acronyms and abbreviations associated with it, such as WS-Addressing, WS-Policy, WS-Security, WS-Federation, WS-ReliableMessaging, WS-Coordination, WS-AtomicTransaction, and WS-RemotePortlets. In fact, you can find a whole laundry list of these standards on Web Services Standards.

The point is that SOAP is highly extensible, but you only use the pieces you need for a particular task. For example, when using a public Web service that’s freely available to everyone, you really don’t have much need for WS-Security.

The XML used to make requests and receive responses in SOAP can become extremely complex. In some programming languages, you need to build those requests manually, which becomes problematic because SOAP is intolerant of errors. However, other languages can use shortcuts that SOAP provides; that can help you reduce the effort required to create the request and to parse the response. In fact, when working with .NET languages, you never even see the XML.

Part of the magic is the Web Services Description Language (WSDL). This is another file that’s associated with SOAP. It provides a definition of how the Web service works, so that when you create a reference to it, the IDE can completely automate the process. So, the difficulty of using SOAP depends to a large degree on the language you use.

One of the most important SOAP features is built-in error handling. If there’s a problem with your request, the response contains error information that you can use to fix the problem. Given that you might not own the Web service, this particular feature is extremely important; otherwise you would be left guessing as to why things didn’t work. The error reporting even provides standardized codes so that it’s possible to automate some error handling tasks in your code.

**REST:**

Many developers found SOAP cumbersome and hard to use. For example, working with SOAP in JavaScript means writing a ton of code to perform extremely simple tasks because you must create the required XML structure absolutely every time.

REST provides a lighter weight alternative. Instead of using XML to make a request, REST relies on a simple URL in many cases. In some situations you must provide additional information in special ways, but most Web services using REST rely exclusively on obtaining the needed information using the URL approach. REST can use four different HTTP 1.1 verbs (GET, POST, PUT, and DELETE) to perform tasks.

Unlike SOAP, REST doesn’t have to use XML to provide the response. You can find REST-based Web services that output the data in Command Separated Value (CSV), JavaScript Object Notation (JSON) and Really Simple Syndication (RSS). The point is that you can obtain the output you need in a form that’s easy to parse within the language you need for your application.

As an example of working with REST, you could create a URL for Weather Underground. The API’s documentation page shows an example URL of http://api.wunderground.com/api/Your_Key/conditions/q/CA/San_Francisco.json. The information you receive in return is a JSON formatted document containing the weather for San Francisco. You can use your browser to interact with the Web service, which makes it a lot easier to create the right URL and verify the output you need to parse with your application.

**SOAP vs REST:**

SOAP is definitely the heavyweight choice for Web service access. It provides the following advantages when compared to REST:

- Language, platform, and transport independent (REST requires use of HTTP)
- Works well in distributed enterprise environments (REST assumes direct point-to-point communication)
- Standardized
- Provides significant pre-build extensibility in the form of the WS* standards
- Built-in error handling
- Automation when used with certain language products

REST is easier to use for the most part and is more flexible. It has the following advantages when compared to SOAP:

-No expensive tools require to interact with the Web service
-Smaller learning curve
-Efficient (SOAP uses XML for all messages, REST can use smaller message formats)
-Fast (no extensive processing required)
-Closer to other Web technologies in design philosophy.

3) Magento API is a type of framework that offers developers and integrators a good method to maximize web services which communicate well with the Magento system. Amongst the primary features are supports for SOAP (Simple Object Access Protocol) and REST (Representation State Transfer). The coverage is just the same for both SOAP and REST in Magento 2.

There are 3 kinds of authentication:

- The mobile applications authenticating via tokens
- The 3rd party applications authenticating via Oath 1.0a.
- The authentication of customers and admins via login credentials.
- Each account and integration serves as assigned sources which they can access. The API framework monitors the calls to check if the account is authorized to do the request.

Each Magento or 3rd party service could be configured into a web API via xml.

In order to configure the web API, you need to define XML attributes and elements in a webapi.xml configuration file. Once the service isn’t defined in a configuration file, it won’t be displayed.

The framework is anchored upon the CRUD model, which stands for Create, Read, Update, and Delete. The system doesn’t support any webhook.

The framework, however, supports web API responses’ field filtering in order to better conserve the mobile bandwidth.

Web API’s integration style helps a web API to operate numerous services simultaneously to promote efficiency. The Magento APIs could be used to execute tasks like:

- Creating a shopping application and the traditional type of application which can be downloaded to a mobile phone or device. This application can be utilized by the employees in a showroom to smoothen the customer's shopping experience.
- Integrating with CRM (Customer Relationship Management) or ERP (Enterprise Resource Planning) backend type systems like Xero or Salesforce.
- Integrating CMS (Content Management System). However, content tagging isn’t supported yet.
- Creating JavaScript Widgets in the Admin Panel or Magento storefront. The widget creates AJAX calls in order to access services.
The Magento API supports XML-RPC and SOAP- SOAP serves as the default protocol.

4) There are three user types that have access to API in Magento and those are:

- Guest user They have access to resources with anonymous permission.
- Administrator/Integration They have access to resources for which are authorized by configuration.
- Customer They have access to resources with self or anonymus permission.

There are three types of authentication that we can use:

1) Token-based authentication
Idea here is to provide username and password during initial connection and receive the token to be used for requests that follow, until token expires.

2) OAuth-based authentication

Access to API is allowed via OAuth 1.0a. In this case, think of Magento API as a service that allows access to resources to third party via approval gotten from resource owners. For example, getting customer (resource owner) info from Magento API (service) from third party application (client). This is little bit out of the scope for this article and separate article is in preparation, however there is simple example of using integration without “Identity link URL” and “Callback URL”.

What you need to do is to go to System > Integrations and add new integration without “Identity link URL” and “Callback URL”. Remember to edit resource access on API tab.

**Useful links:**

https://devdocs.magento.com/guides/v2.2/get-started/bk-get-started-api.html

https://www.codecademy.com/articles/what-is-rest

https://www.oreilly.com/learning/how-to-design-a-restful-api-architecture-from-a-human-language-spec

https://habr.com/post/351890/

https://docs.oracle.com/cd/A97335_02/integrate.102/a90297/overview.htm

https://www.w3schools.com/xml/xml_soap.asp

https://www.soapui.org/learn/api/soap-vs-rest-api.html