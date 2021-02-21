<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function show($name)
    {
        $data = [
            'name'=>$name,
            'desc'=>'',
            'syntax'=>'',
            'demo'=>''
        ];
        switch ($name){
            case 'Draggable':
                $data['desc'] = "Allow elements to be moved using the mouse.";
                $data['syntax'] = [];
                $data['demo'] = [
                    "<!doctype html>",
                    "<html lang=\"en\">",
                    "<head>",
                    "<meta charset=\"utf-8\">",
                    "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">",
                    "<title>jQuery UI Draggable - Default functionality</title>",
                    "<link rel=\"stylesheet\" href=\"/code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">",
                    "<link rel=\"stylesheet\" href=\"/resources/demos/style.css\">",
                    "<style>",
                    "#draggable { width: 150px; height: 150px; padding: 0.5em; }",
                    "</style>",
                    "<script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>",
                    "<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>",
                    "<script>",
                    "$( function() {",
                    "$( \"#draggable\" ).draggable();",
                    "} );",
                    "</script>",
                    "</head>",
                    "<body>",
                    "<div id=\"draggable\" class=\"ui-widget-content\">",
                    "<p>Drag me around</p>",
                    "</div>",
                    "</body>",
                    "</html>"
                ];
                break;
            case 'Droppable':
                $data['desc'] = "Create targets for draggable elements.";
                $data['syntax'] = [];
                $data['demo'] = [
                    "<!doctype html>",
                    "<html lang=\"en\">",
                    "<head>",
                    "<meta charset=\"utf-8\">",
                    "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">",
                    "<title>jQuery UI Droppable - Default functionality</title>",
                    "<link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">",
                    "<link rel=\"stylesheet\" href=\"/resources/demos/style.css\">",
                    "<style>",
                    "#draggable { width: 100px; height: 100px; padding: 0.5em; float: left; margin: 10px 10px 10px 0; }",
                    "#droppable { width: 150px; height: 150px; padding: 0.5em; float: left; margin: 10px; }",
                    "</style>",
                    "<script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>",
                    "<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>",
                    "<script>",
                    "$( function() {",
                    "$( \"#draggable\" ).draggable();",
                    "$( \"#droppable\" ).droppable({",
                    "drop: function( event, ui ) {",
                    "$( this )",
                    ".addClass( \"ui-state-highlight\" )",
                    ".find( \"p\" )",
                    ".html( \"Dropped!\" );",
                    "}",
                    "});",
                    "} );",
                    "</script>",
                    "</head>",
                    "<body>",
                    "<div id=\"draggable\" class=\"ui-widget-content\">",
                    "<p>Drag me to my target</p>",
                    "</div>",
                    "<div id=\"droppable\" class=\"ui-widget-header\">",
                    "<p>Drop here</p>",
                    "</div>",
                    "</body>",
                    "</html>"
                ];
                break;
            case 'Resizable':
                $data['desc'] = "Change the size of an element using the mouse.";
                $data['syntax'] = [];
                $data['demo'] = [
                    "<!doctype html>",
                    "<html lang=\"en\">",
                    "<head>",
                    "<meta charset=\"utf-8\">",
                    "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">",
                    "<title>jQuery UI Resizable - Default functionality</title>",
                    "<link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">",
                    "<link rel=\"stylesheet\" href=\"/resources/demos/style.css\">",
                    "<style>",
                    "#resizable { width: 150px; height: 150px; padding: 0.5em; }",
                    "#resizable h3 { text-align: center; margin: 0; }",
                    "</style>",
                    "<script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>",
                    "<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>",
                    "<script>",
                    "$( function() {",
                    "$( \"#resizable\" ).resizable();",
                    "} );",
                    "</script>",
                    "</head>",
                    "<body>",
                    "<div id=\"resizable\" class=\"ui-widget-content\">",
                    "<h3 class=\"ui-widget-header\">Resizable</h3>",
                    "</div>",
                    "</body>",
                    "</html>"
                ];
                break;
        }
        return response()->json($data);
    }
}
