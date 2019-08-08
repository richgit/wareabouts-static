<?php

$quoteArray = array();
array_push($quoteArray, "When I first heard that Marge was joining the police academy, I thought it would be fun and zany, like that movie Spaceballs. But instead it was dark and disturbing. Like that movie -- Police Academy.");

array_push($quoteArray, "What is a wedding? Webster's dictionary defines a wedding as 'the process of removing weeds from one's garden.'");
array_push($quoteArray, "Weaseling out of things is important to learn. It's what separates us from the animals... except the weasel.");
array_push($quoteArray, "The only monster here is the gambling monster that has enslaved your mother! I call him Gamblor, and it's time to snatch your mother from his neon claws!"); 
array_push($quoteArray, "Old people don't need companionship. They need to be isolated and studied so it can be determined what nutrients they have that might be extracted for our personal use.");
array_push($quoteArray, "No, no, no, Lisa. If adults don't like their jobs, they don't go on strike. They just go in every day and do it really half-assed.");
array_push($quoteArray, "Look, all I'm saying is, if these big stars didn't want people going through their garbage and saying they're gay, then they shouldn't have tried to express themselves creatively.");
array_push($quoteArray, "Let us celebrate our agreement with the adding of chocolate to milk.");
array_push($quoteArray, "Kids, just because I don't care doesn't mean I'm not listening.");
array_push($quoteArray, "I've got more trophies than Wayne Gretzky & The Pope combined!");	
array_push($quoteArray, "I'm not normally a religious man, but if you're up there, save me, Superman!");
array_push($quoteArray, "I'm like that guy who single-handedly built the rocket & flew to the moon! What was his name? Apollo Creed?");
array_push($quoteArray, "If he's so smart, how come he's dead?"); 
array_push($quoteArray, "If God didn't want us to eat animals, why did he make them out of meat?");
array_push($quoteArray, "I saw this in a movie about a bus that had to SPEED around a city, keeping its SPEED over fifty, and if its SPEED dropped, it would explode! I think it was called, 'The Bus That Couldn't Slow Down.'");
array_push($quoteArray, "Haven't you learned anything from that guy that gives those sermons in church? Captain What's-his-name. We live in a society of laws, why do you think I took you to see all those Police Academy movies? For fun? Well I didn't hear anybody laughing! Did you? Except at that guy who made sound effects. Vroom! Beep! Honk! Honk! Ha-ha. Where was I? Oh yeah, stay out of my booze!");
array_push($quoteArray, "English? Who needs that? I'm never going to England.");
array_push($quoteArray, "Scully: Homer, we're going to ask you a few simple yes or no questions. Do you understand?<br/><br/>
Homer: Yes. [lie dectector blows up] ");
array_push($quoteArray, "Kids, you tried your best and you failed miserably. The lesson is, never try.");
array_push($quoteArray, "Homer: Are you saying you're never going to eat any animal again? What about bacon?<br/><br/>
Lisa: No.<br/><br/>
Homer: Ham?<br/><br/>
Lisa: No.<br/><br/>
Homer: Pork chops?<br/><br/>
Lisa: Dad, those all come from the same animal.<br/><br/>
Homer: Heh heh heh. Ooh, yeah, right, Lisa. A wonderful, magical animal.");
array_push($quoteArray, "Marge: Homer, the plant called. They said if you don't show up tomorrow don't bother showing up on Monday.<br/><br/>
Homer: Woo-hoo. Four-day weekend.");
array_push($quoteArray, "Marge: Homer! There's someone here who can help you...<br/><br/>
Homer: Is it Batman?<br/><br/>
Marge: No, he's a scientist.<br/><br/>
Homer: Batman's a scientist?!<br/><br/>
Marge: It's not Batman!");
array_push($quoteArray, "Here's to alcohol, the cause of—and solution to—all life's problems.");
array_push($quoteArray, "[drunk] Look, the thing about my family is there's five of us. Marge, Bart, Girl Bart, the one who doesn't talk, and the fat guy. How I loathe him.");
array_push($quoteArray, "Homer no function beer well without.");
array_push($quoteArray, "[Looking at a globe map...country being Uruguay]
Hee hee! Look at this country! 'You are gay.'"); 
array_push($quoteArray, "How is education supposed to make me feel smarter? Besides, every time I learn something new, it pushes some old stuff out of my brain. Remember when I took that home winemaking course, and I forgot how to drive?");
array_push($quoteArray, "Lisa, Vampires are make-believe, like elves, gremlins, and eskimos.");
array_push($quoteArray, "[Meeting Aliens] Please don't eat me! I have a wife and kids. Eat them!");
array_push($quoteArray, "Okay Marge, its your child against my child. The winner will be showered with praise. The loser will be taunted and booed until my throat is sore.");
array_push($quoteArray, "Facts are meaningless. You could use facts to prove anything that's even remotely true!");

?>
						<div> 
						  <h1>Homer Quote of the Day</h1>
                        </div>
						<div style="float:left"><br/><br/>
						<img src="image/homer<?php

# get image based on day
echo date("w") + 1;
?>.gif" border="0" alt="Homer"/>
						</div>
						<div>
<?php
echo ($quoteArray[date("j") -1]);

?>
						</div>
