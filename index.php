<?php

addEventListener("fetch", function ($event) {
    $event->respondWith(handleRequest($event->request));
});

function handleRequest($request) {
    return new Response("Test", [
        "headers" => [ "content-type" => "text/plain" ]
    ]);
}