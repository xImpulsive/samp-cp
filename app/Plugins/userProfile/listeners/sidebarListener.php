<?php

Event::listen("view.inject.sidebar", function() {
    return view("userProfile::sidebar");
});