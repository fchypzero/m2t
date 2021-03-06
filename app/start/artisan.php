<?php

/*
|--------------------------------------------------------------------------
| Register The Artisan Commands
|--------------------------------------------------------------------------
|
| Each available Artisan command must be registered with the console so
| that it is available to be called. We'll register every command so
| the console gets access to each of the command object instances.
|
*/

Artisan::resolve("commands.add_torrent");
Artisan::resolve("commands.check_torrent");
Artisan::resolve("commands.collect_stats");
Artisan::resolve("commands.queue_collect_stats");

