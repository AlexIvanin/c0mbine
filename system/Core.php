<?php
Class Core {
public function debug() 
    {
// Create & attach hacker conole to HTML output.
new Debug_HackerConsole_Main(true);

// Dump string values.
for ($i=0; $i<10; $i++) {
	$sp = str_repeat(' ', $i);
	Debug_HackerConsole_Main::out(
		"$sp\ti=$i", "Counting", "#008800"
	);
}

// Output to default group.
Debug_HackerConsole_Main::out("Usual message");

// Dump random structure.
Debug_HackerConsole_Main::out($_SERVER, "Input");




    }

}

