<?php

Event::listen("view.inject.acp.sidebar", function() {
    return view("userProfile::sidebar");
});