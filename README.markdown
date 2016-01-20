# ReadernautGoals shortcode

Display your [Readernaut][rn] book progress in a post or page using this shortcode system.

### Shortcode details -
#### Essential arguments - 
username="yourusername"
api_key="your api_key"
goalid="the goal ID"

#### Extra arguments -
return="bookname" or "bookgoal"

### Examples - 
[readernautdata username="nitinkhanna" api_key="abcdefghijklmnop" goalid="171349" return="bookname"] returns War and Peace

[readernautdata username="nitinkhanna" api_key="abcdefghijklmnop" goalid="171349" return="bookgoal"] returns your position in the book in the format - 5992/28927

You can see this shortcode working on [my /now page here][mnp]

#### To find your API key
As described [here][https://gist.github.com/nitinthewiz/822b4af64130b397121c] -
Currently you can find your API_KEY by viewing source on any page and searching for "api_key" in the output.

#### To find your goal ID
Go to readernaut.com/<yourusername> and find one of your entries where it says "User read x pages in BOOKName". Hover over the Date and copy the link. The entry immediate after the word 'goals' is your goal ID.

Example - In the following link - 
http://readernaut.com/nitinkhanna/goals/171349/94033/

My goal ID = 171349



#### This plugin is heavily influenced by - 
0. [Readernaut's current API][https://gist.github.com/nitinthewiz/822b4af64130b397121c]
1. [wp-Readernaut plugin][https://github.com/trey/wp-readernaut]
2. [Adam Kirkwood's Readernaut-Apparatus][https://github.com/adamkirkwood/readernaut-apparatus]
3. [Shortcode API][https://codex.wordpress.org/Shortcode_API]
4. [Shortcodes with parameters][https://developer.wordpress.org/plugins/shortcodes/shortcodes-with-parameters/]

#### Special thanks to -
1. [JSON parser][http://json.parser.online.fr/]

[rn]: http://readernaut.com
[mnp]: http://www.nitinkhanna.com/now/
