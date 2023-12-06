<?php

addEventListener("fetch", function ($event) {
    $event->respondWith(handleRequest($event->request));
});

function handleRequest($request) {
    return new Response('<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CezarBican</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h3 style="text-align: center;">
                🚀 Welcome to the Future! 🌟
            </h3>
    
            <h4>
                Greetings, Trailblazers! 
            </h4>
                
            <p>
                As we embark on this exciting journey of creating something extraordinary, we invite you to witness the birth of innovation and inspiration. Our website is currently undergoing a transformative development process, where every line of code, every pixel, and every idea is being crafted with passion and dedication.
                
                In the realm of possibilities, we are sculpting a digital masterpiece that will transcend boundaries and redefine excellence. The seeds of creativity are being sown, and soon, youll witness a virtual landscape that reflects the very essence of our vision.
                
                Just like the construction of a magnificent skyscraper, the process may seem complex, with scaffolding and raw materials scattered around. Yet, within this organized chaos lies the promise of a structure that will stand tall, captivating the hearts and minds of those who encounter it.
                
                This website is not just a project; its a manifestation of dreams, a testament to our relentless pursuit of excellence. As we navigate through the development phase, we want you to be a part of this exhilarating expedition.
                
                Stay tuned for a symphony of design, functionality, and innovation. The best is yet to come, and we cant wait to share it with you.
                
                Together, lets witness the birth of brilliance.
            
            </p>
    
            <a href="https://cezarbican.com/"><h3> 🌐 cezarbican.com </h3></a>
            <script>
                console.log("🌐 cezarbican.com ")    
            </script>
            Test
            <div class="container text-center">
                <img src="./things/work.gif" class="img-fluid p-4" alt="Work In Progress">
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
    </html>', [
        "headers" => [ "content-type" => "text/plain" ]
    ]);
}