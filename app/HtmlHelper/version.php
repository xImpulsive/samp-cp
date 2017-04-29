<?php

Html::macro('version', function()
{
    return \App\Models\GitVersion::getVersion();
});