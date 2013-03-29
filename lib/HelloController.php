<?php

class HelloController extends AbstractController {

  function doGET(HttpRequest $request, HttpResponse $response) {
    print("Hello, template!");
  }

}