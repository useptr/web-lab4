<?php
$contents = [
    'Qt' => "Qt — это кроссплатформенный фреймворк, который позволяет разработчикам создавать приложения для различных операционных систем, таких как Windows, Linux и macOS. Qt предоставляет богатый набор модулей, включая графический интерфейс, сеть, мультимедиа и многое другое, что делает его отличным выбором для разработки сложных приложений. Его платформа пользовательского интерфейса позволяет разработчикам с легкостью создавать красивые и современные интерфейсы.",
    'Wt' => "Wt — это фреймворк веб-приложений, который позволяет разработчикам создавать веб-приложения с использованием C++. Его встроенные виджеты и компоненты позволяют легко создавать сложные веб-приложения с минимальными усилиями. Кроме того, Wt предоставляет модель событий на стороне сервера, которая позволяет разработчикам писать веб-приложения, обладающие высокой отзывчивостью и интерактивностью.",
    'Boost' => "Boost — это широко используемая библиотека C++, которая предоставляет широкий спектр функциональных возможностей, включая алгоритмы, структуры данных и контейнеры. Boost известен своей производительностью и экономичностью, что делает его популярным выбором для разработки высокопроизводительных приложений. Кроме того, Boost обладает отличной документацией, облегчающей разработчикам его изучение и использование.",
    'Spring' => "Spring -    Spring Framework is one of the most extensively used, top-notch, lightweight software application frameworks built for software design, development, and deployment in Java.",
    'Hibernate' => "Hibernate -     Hibernate is one of the best Frameworks which is capable of extending Java's Persistence API support. Hibernate is an open-source, extremely lightweight, performance-oriented, and ORM (Object-Relational-Mapping) tool.",
    'Struts' => "Struts -     Apache Struts belongs to the Apache Software Foundation. Craig McClanahan created Struts as open-source software. They designed Struts to inherit the Java Servlet API properties to ease the Development process for Java Developers.",
    'Alamofire' => "Alamofire — A powerful and easy-to-use HTTP networking library for iOS, macOS, and watchOS. With over 38,000 stars on GitHub, it is one of the most popular open-source Swift frameworks. It offers a simple, expressive, and composable syntax for interacting with APIs over the network.",
    'Charts' => "Charts — Charts is a powerful charting library for iOS, with over 26,000 stars. It offers a wide range of chart types, customizable styling, and easy integration with iOS apps.",
    'Vapor' => "Vapor — Vapor is a popular web framework for building server-side Swift applications, with over 22,000 stars. It offers a simple and expressive syntax, and is built on top of Apple’s SwiftNIO networking library.",
    'gin' => "gin - The gin framework tops the list of Go frameworks in terms of popularity due to its minimalist framework and performance. It is mostly used for building a REST API for the backend if the programmer wants to develop a single-page application using a frontend framework. This framework makes use of the HTTP routers for handling the Golang traffic and is ideal for beginners along with its rich documentation provided on GitHub. It supports the most essential libraries and features which makes it the most suitable Golang framework to develop high-performance REST APIs.",
    'beego' => "beego - The beego framework is used for the rapid development of REST APIs, web applications, and backend services in Golang. It is often viewed similarly to the Django web framework in Python and contains specific features of Golang such as interfaces and struct embedding. It does not require any third-party installations. It is a full-fledged Model-View-Controller (MVC) framework with its own libraries and a built-in tool that helps with finding the code changes, known as the Bee Tool.",
    'echo' => "echo -     The echo framework used in Go is another high-performance, extensible, and minimalist web framework in Golang. It has a highly optimized HTTP router with zero dynamic memory allocation that smartly prioritizes routes. It is used to build robust and scalable REST APIs, which can easily be organized into groups. It automatically installs TLS certificates from Let’s Encrypt and provides HTTP/2 support which improves the speed and provides a better user experience. It also contains many built-in middlewares to use and developers can even define their own which can be set at a root, group, or route level.",
    ];
$response ="<div class=\"auth-content\">";
if(isset($_GET['selected_option'])) {
    $selected = $_GET['selected_option'];
    if (array_key_exists($selected, $contents)) {
        $response .= $contents[$selected];
    }
}
$response .="</div>\n";
echo $response;
?>