<?php
session_start();
$new_q='';
$new_a='';
function getNewQuestion(){
      			global $quesArray;
      			global $ansArray;
      			global $new_q;
      			global $new_a;
      			$new_ind = rand(0,count($correct)-1);
	      		$new_q = $quesArray[$new_ind];
	      		$new_a = $ansArray[$new_ind];
}
$quesArray = array(

'If A is the son of Q, Q and Y are sisters, Z is the mother of Y, P is the son of Z, then which of the following statements is correct ? ',

'There are five books A, B, C, D and E placed on a table. If A is placed below E, C is placed above D, B is placed below A and D is placed above E, then which of the following books touches the surface of the table ? ',

'Three ladies X, Y and Z marry three men A, B and C. X is married to A, Y is not married to an engineer, Z is not married to a doctor, C is not a doctor and A is a lawyer. Then which of the following statements is correct ?',

'In a family there are husband wife, two sons and two daughters. All the ladies were invited to a dinner. Both sons went out to play. Husband did not return from office. Who was at home? ',

'Artists are generally whimsical. Some of them are frustrated. Frustrated people are prone to be drug addicts. Based on these statements which of the following conclusions is true? ',

'Each of the following questions contains two statements followed by two conclusions numbered I and II. You have to consider the two statements to be true, even if they seen to be at variance at the commonly known facts. You have to decide which of the given conclusions definitely follows from the given statements. Statement : Some tables are glasses. All trees are tables.
Conclusions: I.Some trees are glasses
II. Some glasses are trees. ',

'Find the odd one out ',

'Find the odd one out ',

'Find the odd one out ',

'Find the odd one out ',

'Find the odd one out ',

'Find the odd one out ',

'Find the odd one out ',

'Pointing to a man in a photograph, a woman said, "His brother\'s father is the only son of my grandfather." How is the woman related to the man in the photograph? ',

'A told B,"The girl I met yesterday was the youngest daughter of the brother-in-law of my friend\'s mother." How is the girl related to A\'s friend? ',

'A and B are young ones of C. If C is the father of A but B is not the son of C. How are B and C related ',

'A man pointing to a photograph says. "The lady in the photograph is my nephew\'s maternal grandmother." How is the lady in the photograph related to the man\'s sister who has no other sister?  ',

'F is the brother of A, C is the daughter of A, K is the sister of F and G is the brother of C then who is the uncle of G? ',

'A woman walking with a boy meets another woman and on being asked about her relationship with the boy, she says, "My maternal uncle and his maternal uncle\'s maternal uncle are brothers." How is the boy related to the woman ?',

'Six members of a family ABCDE and F are travelling together. B is the son of C but C is not the mother of B. A and C are married couple. E is the brother of C. D is the daughter of A. F is the brother of B. How many male members are there in the family ? ',

'A woman introduces a man as the son of the brother of her mother. How is the man related to the woman? ',

'A told B that C is his father\'s nephew. D is A\'s cousin but not the brother of C. What relationship is there between D and C ?',

'Pointing towards a person, a man said to a woman, His mother is the only daughter of your father. How is the woman related to that person? ',

'Pointing out to a girl a man said "My uncle is the uncle of this girl\'s uncle". How is the man related to that girl ? ',

'If S is the brother of N, the sister of N is M, the brother of P is J and the daughter of S is P then who is the uncle of J? ',

'A girl introduced a boy as the son of the daughter of the father of her uncle. The boy is girl\'s ',

'A is the brother of B and K, D is the mother of B and E is the father of A. Which of the following statement is not definitely true? ',

'Pointing to a photograph, a man said, "I have no brother or sister but that man\'s father is my father\'s son." Whose photograph was it? ',

'A is the mother of B and C. If D is the husband of C. What is A to D. ',

'A man said to a lady, "Your mother\'s husband\'s sister is my aunt." How is the lady related to the man? ',

'A family consists of six members P, Q, R, X, Y and Z. Q is the son of R but R is not mother of Q. P and R are a married couple. Y is the brother of R. X is the daughter of P. Z is the brother of P. Who is the father of Q ? ',

'If X is the brother of the son of Y\'s son, how is X related to Y? ',

'Introducing a man, a woman said, "His wife is the only daughter of my father." How is that man related to the woman? ',

'Poles : Magnet :: ? : Battery ',

'Peace : Chaos :: Creation : ? ',

'Architect : Building :: Sculptor : ? ',

'Horse : Mare :: ',

'Cricket : Pitch :: ',

'Oceans : Deserts : : Waves : ? ',

'Grain : Stock : : Stick : ? ',

'Cube is related to Square in the same way as Square is related to ',

'Bank is related to Money in the same way as Transport is related to ',

'Fan is related to Wings in the same way as Wheel is related to ',

'Enough : Excess : : Sufficiency : ? ',

'Hermit : Solitude : : Intruder : ? ',

'Sedative : Pain : : Solace : ? ',

'Sorrow : Death : : Happiness : ? ',

'Ship : Sea : : Camel : ? ',

'Dilatory : Expeditious : : Direct : ? ',

'If PALE is coded as 2134, EARTH is coded as 41590, how can is PEARL be coded in that language? ',

'If ZEBRA can be written as 2652181, how can COBRA be written?',

'If \'eraser\' is called \'box\', \'box\' is called \'pencil\', \'pencil\' is called \'sharpener\', and \'sharpener\' is called \'bag\', what will a child write with? ',

'If TRANSFER is coded as RTNAFSRE, then ELEPHANT would be coded as ',

'If FRIEND is coded as HUMJTK, how is CANDLE written in that code ?',

'If CIGARETTE is coded as GICERAETT, then DIRECTION will be coded as',

'In a certain code, SYSTEM is SYSMET and NEARER is AENRER. What is the code for FRACTION? ',

'If in a certain language KINDLE is coded as ELDNIK, how is EXOTIC coded in that code?',

'If LBAEHC is the code for BLEACH, then which of the following is coded NBOLZKMH? ',

'If ELCSUM is the code for MUSCLE, which word has the code LATIPAC?',

'Ross is looking at Rachael, but Rachael is looking at Joey. Ross is married, but Joey is not. Is a married person looking at an unmarried person?',

'The volume of a cube with edge of length 2 is how many times the volume of a cube with edge of length  2^1/2?',

'If x = 3^2, then what is the value of x^x? ',

'What is the probability that the sum of two different single-digit prime numbers will NOT be prime?',

'Two children named Peter and Wanda are playing a number game. If Peter\'s number z is 200 percent of Wanda\'s number, what is 20 percent of Wanda\'s number, in terms of z?',

'What is the area of a circle whose circumference is x?(pi=3.14)',

'A rectangle has length 2x and width x. If each diagonal of the rectangle has length d, what is the area of the rectangle, in terms of d?',

'Let x, y, and z be non-zero numbers such that the average (arithmetic mean) of x and twice y is equal to the average (arithmetic mean) of y and twice z. What is the average (arithmetic mean) of x and y?',

'If A = q - r, B = r - s, and C = q - s, what is the value of A - (B - C)?',

'Brian spent  of his paycheck to repair his car, and then paid the registration and insurance, which each cost  of the remainder of his paycheck. If Brian had $0 before he was paid, and he now has $231 left, what was the amount of his paycheck? ',

'If a is 60% of b, b is 40% of c, and c is 20% of d, then 6d is what percent of 20a?',

'At a crafts supply store, the price of a type of decorative string is c cents per foot. At this rate, what would be the price, in dollars, of y yards of this string?',

'Jan and Marko are competing in an off-road race. Jan completes 3/4 of the race in 2 hours. Marko completes 2/3 of the race in 5/8 of the time it takes Jan to complete 9/10 of the race.Which of the following is true ?',

'Rachel, David, and Kristen decide to pool their money to buy a video game system. David contributes 4 dollars more than twice what Kristen does, and Kristen contributes 3 dollars less than Rachel does. If Rachel contributes r dollars, then, in terms of r, how much does David contribute?',

'If 3 less than twice a certain number is equal to 2 more than 3 times the number, then 5 less than 5 times the number is',

'A sports league encourages collaboration by awarding 3 points for each goal scored without assistance and 5 points for each goal scored with assistance. A total of 48 points were scored by a team in a single game. Which of the following CANNOT be the number of goals scored without assistance by this team in this game?',

'During a sale, the original price of a garment is lowered by 20%. Because the garment did not sell, its sale price was reduced by 10%. The final price of the garment could have been obtained with a single discount by x% from the original price, where x = ',

'There are three boxes. One is labeled "APPLES" another is labeled "ORANGES". The last one is labeled "APPLES AND ORANGES". You know that each is labeled incorrectly. You may ask me to pick one fruit from one box which you choose?',

'A frog is at the bottom of a 30 meter well. Each day he summons enough energy for one 3 meter leap up the well. Exhausted, he then hangs there for the rest of the day. At night, while he is asleep, he slips 2 meters backwards. How many days does it take him to escape from the well?',

'Aadil has ten black socks and ten white socks in her drawer.In complete darkness, and without looking, how many socks must he take from the drawer in order to be sure to get a pair that match?',

'Mary\'s mum has four children.The first child is called April.The second May.The third June.What is the name of the fourth child?',

'A pot contains 75 white beans and 150 black ones. Next to the pot is a large pile of black beans.
A somewhat demented cook removes the beans from the pot, one at a time, according to the following strange rule: He removes two beans from the pot at random. If at least one of the beans is black, he places it on the bean-pile and drops the other bean, no matter what color, back in the pot. If both beans are white, on the other hand, he discards both of them and removes one black bean from the pile and drops it in the pot.
At each turn of this procedure, the pot has one less bean in it. Eventually, just one bean is left in the pot. What color is it?',

'Two friends decide to get together; so they start riding bikes towards each other. They plan to meet halfway. Each is riding at 6 MPH. They live 36 miles apart. One of them has a pet carrier pigeon and it starts flying the instant the friends start traveling. The pigeon flies back and forth at 18 MPH between the 2 friends until the friends meet.
How many miles does the pigeon travel?',

'What is remainder when 1!+2!+3!+4!+....+100! is divided by 7?',

'Which is latest version of android mobile operating system?',

'Which of the following is not a mobile OS?',

'The fastest supercomputer Sunway TaihuLight is installed in which of the following countries?',

'What is remainder when 1!+2!+3!+4!+....+100! is divided by 6?',

'What is name of Samsung\'s own mobile OS?',

'Six foxes catch six hens in six minutes. How many foxes will be needed to catch sixty hens in sixty minutes?',

'A bat and ball cost  $1.10 .The bat costs one dollar more than the ball. How much does the ball cost?',

'Parul is super sad about getting old. The day before yesterday she was 15, and next year she will be 18. This is true on only one day.
When is her birthday?',

'The dog has five daughters. Each of the daughters has one brother. How many children does the dog have?',

'Friends is on TV at 6.30 pm. How many degrees are there between the two hands of clock at 6.30 pm?',

'If two Viners can post two Vines in two minutes, how many Viners will it take to post 18 Vines in six minutes?',

'Papa Johns have an offer where they let you swap five empty pizza boxes for a free pizza. Mohit has 25 pizza boxes. How many free pizzas can he get?',

'Which one is the first search engine in internet?',

'Number of bit used by the IPv6 address?',

'Which IT company\'s nickname is \' The Big Blue \' ?',

'What was the day on 15 August 1947 ?',

'What is google headquarters called?',

'What is the name of the operating system that Google created for mobile phones?',

'How many zeros in Googol?',

'A B C D E F G H What letter comes two to the right of the letter which is immediately to the left of the letter that comes three to the right of the letter that comes midway between the letter two to the left of the letter C and the letter immediately to the right of the letter F?',

'At college, 70% of the students studied Maths, 75% studied English, 85% studied French and 80% studied German. What percentage at least must have studied all 4?',

'SUNDAY MONDAY TUESDAY WEDNESDAY THURSDAY FRIDAY SATURDAY What day comes three days after the day which comes two days after the day which comes immediately after the day which comes two days after Monday?',

'A card player holds 13 cards of four suits, of which seven are black and six are red. There are twice as many hearts as clubs and twice as many diamonds as hearts. How many spades does he hold?',

'You have 59 cubic blocks. What is the minimum number that needs to be taken away in order to construct a solid cube with none left over?',

'Every station on the railway system sells tickets to every other station. Some new stations were added. 46 sets of additional sets of tickets were required. How many new stations have been added? How many stations were there originally?',

'A vessel is filled to its capacity with pure milk. Ten litres are withdrawn from it and replaced by water. This procedure is repeated again. The vessel now has 32 litres of milk. Find the capacity of the vessel (in litres).',

'If N is a four-digit number, then is N divisible by 99?
A. The sum of the digits of N excluding the units digit is 20.
B. N is a palindrome with the sum of the units digits and the hundreds digits is 15.',

'The marks scored by 40 students in a test are distinct and have integral values. If the highest score is 120 and their average score is 100.5, then find the average of the least and the second least mark.',

'The average age of a father and his only son is 25% more than the average age of that boy and his mother. When that boy was born, his mother was 30 years old and his father was 40 years old. Find the present age of father.',

'A sum of Rs.32000 was deposited in a savings account in two parts. One part was deposited at 8% p.a. and the other part was deposited at 12% p.a. The sum earns an interest of 9% p.a. Find the difference (in Rs.) of the two parts.',

'When 2^256 is divided by 17 the remainder would be',

'The milk and water in two vessels A and B are in the ratio 4:3 and 2:3 respectively. In what ratio the liquids in both the vessels be mixed to obtain a new mixture in vessel c consisting half milk and half water?',

'How many kilograms of sugar costing Rs. 9 per kg must be mixed with 27kg of sugar costing Rs.7 per kg so that there may be gain of 10% by selling the mixture at Rs.9.24 per kg?',

'A can contains a mixture of two liquids A and B in the ratio 7:5 when 9 litres of mixture are drawn off and the can is filled with B, the ratio of A and B becomes 7:9. How many litres of liquid A was contained by the can initially?',

'8 litres are drawn from a cask filled with wine and is then filled with water. This operation is performed three more times.
The ratio of the quantity of wine now left in cask to that of the total solution is 16:81.
How much wine did the cask hold originally?',

'A man travelled a distance of 90Km in 9 hours partly on foot at 8 kmph and partly on bicycle at 17 kmph.
Find the distance travelled on foot.
',

'Teas worth Rs. 126 per kg and Rs. 135 per kg are mixed with a third variety in the ratio 1 : 1 : 2.
If the mixture is worth Rs 153 per Kg , the price of the third variety per Kg will be?',

'If January 1st, 2007 is Monday, what was the day on 1st January 1995?',

'Today is Monday. After 61 days, it will be',

'How many times in a day, are the hands of a clock in straight line but opposite in direction?',

'How many times will the hands of a clock coincide in a day?',

'A watch which gains 5 seconds in 3 minutes was set right at 7 a.m. In the afternoon of the same day, when the watch indicated quarter past 4 o\'clock, the true time is',

'How many times are the hands of a clock at right angle in a day?',

'Jasleen and Parul go for an interview for two vacancies. The probability for the selection of Jasleen is 1/3 and whereas the probability for the selection of Parul is 1/5. What is the probability that none of them are selected?',

'Two train each 500 500 metre long, are running in opposite directions on parallel tracks. If their speeds are 4545 km/hr and 3030 km/hr respectively, the time taken by the slower train to pass the driver of the faster one is',

);

$ansArray = array(

array(
'P is the maternal uncle of A',
'P and Y are sisters',
'A and P are cousins',
'None of the above'
),

array(
'C',
'B',
'A',
'E'
),

array(
'Y is married to C who is an engineer',
'Z is married to C who is a doctor',
'X is married to a doctor',
'None of these'
),

array(
'Only wife was at home',
'All ladies were at home',
'Only sons were at home',
'No body was at home'
),

array(
'All frustrated people are drug addicts',
'Some artists may be drug addicts',
'All drug addicts are artists',
'Frustrated people are whimsical'
),

array(
'if only I follows' ,
'if only conclusion II follows' ,
'if both I and II follows',
'if neither I nor II follows'
),

array(
'crusade',
'expedition',
'cruise',
'campaign'
),

array(
'flourish',
'renovate',
'blossom',
'thrive'
),

array(
'Vapour',
'Mist',
'Hailstone',
'Fog'
),

array(
'Circle : Arc',
'Chair : Leg',
'Flower : Petal',
'Cover : Page'
),

array(
'Ginger',
'Garlic',
'Chilli',
'Potato'
),

array(
'Mango',
'Papaya',
'Apple',
'Orange'
),

array(
'Owl',
'Eagle',
'Hawk',
'Parrot'
),

array(
'Sister',
'Aunt',
'Grandmother',
'Daughter'
),

array(
'Niece',
'Cousin',
'Friend',
'Daughter'
),

array(
'Niece and Uncle',
'Daughter and Father',
'Niece and Aunt',
'Daughter and Mother'
),

array(
'Mother-in-law',
'Cousin',
'Sister-in-law',
'Mother'
),

array(
'C',
'A',
'K',
'None of the above.'
),

array(
'Husband',
'Brother-in-law',
'Son',
'Grandson'
),

array(
'4',
'3',
'2',
'1'
),

array(
'Uncle',
'Grandson',
'Cousin',
'Son'
),

array(
'Father',
'Sisters',
'Aunt',
'Mother'
),

array(
'Sister',
'Daughter',
'Mother',
'Wife'
),

array(
'Cousin',
'Brother',
'Father in law',
'Father'
),

array(
'J',
'S',
'P',
'M'
),

array(
'Uncle',
'Nephew',
'Brother',
'Son'
),

array(
'A is the son of D',
'A is the father of K',
'B is the brother of K',
'A is the son of E'
),

array(
'His own',
'His nephews',
'His fathers',
'His sons'
),

array(
'Mother',
'Sister',
'Aunt',
'Mother-in-law'
),

array(
'Sister',
'Daughter',
'Mother',
'Grand daughter'
),

array(
'P',
'R',
'X',
'Z'
),

array(
'Cousin',
'Son',
'Grandson',
'Brother'
),

array(
'Father in law',
'Husband',
'Maternal uncle',
'Brother'
),

array(
'Energy',
'Power',
'Terminals',
'Cells'
),

array(
'Manufacture',
'Destruction',
'Build',
'Construction'
),

array(
'Museum',
'Statue',
'Chisel',
'Stone'
),

array(
'Fox : Vixen',
'Duck : Geese',
'Dog : Puppy',
'Donkey : Pony'
),

array(
'Ship : Dock',
'Boat : Harbour',
'Boxing : Ring',
'Wrestling : Track'
),

array(
'Dust',
'Sand Dunes',
'Ripples',
'Sea'
),

array(
'String',
'Heap',
'Collection',
'Bundle'
),

array(
'Plane',
'Triangle',
'Line',
'Point'
),

array(
'Traffic',
'Goods',
'Speed',
'Road'
),

array(
'Round',
'Air',
'Spokes',
'Cars'
),

array(
'Adequacy',
'Surplus',
'Competency',
'Import'
),

array(
'Thief',
'Privacy',
'Burglar',
'Alm'
),

array(
'Irritation',
'Kill',
'Grief',
'Hurt'
),

array(
'Love',
'Dance',
'Cry',
'Birth'
),

array(
'Forest',
'Land',
'Mountain',
'Desert'
),

array(
'Tortuous',
'Circumlocutory',
'Straight',
'Curved'
),

array(
'25430',
'29530',
'25413',
'24153'
),

array(
'302181',
'3152181',
'31822151',
'1182153'
),

array(
'Eraser',
'Bag',
'Pencil',
'Sharpener'
),

array(
'LEPEHATN',
'LEPEAHTN',
'LEEPAHTN',
'LEPEAHNT'
),

array(
'EDRIRL',
'DCQHQK',
'ESJFME',
'FYOBOC'
),

array(
'NOIETCRID',
'RIDTCENOI',
'IRDCTIONE',
'NORTECDII'
),

array(
'CARFNOIT',
'CARFTION',
'FRACNOIT',
'ARFCNOIT'
),

array(
'EOXITC',
'EXOTLC',
'CITOXE',
'COXITE'
),

array(
'BNLOKZHM',
'MANKYJLG',
'LOBNHMKZ',
'OBNKZLHM'
),

array(
'CAPRICE',
'CONFESS',
'CONDUCE',
'CAPITAL'
),

array(
'Yes',
'No',
'Cannot be determined',
'None of these'
),

array(
'2',
'2^1/2',
'4',
'2*(2^1/2)'
),

array(
'3^12',
'3^9',
'3^18',
'3^8'
),

array(
'0',
'1/2',
'2/3',
'1'
),

array(
'10z',
'2z',
'z/5',
'z/10'
),

array(
'x^2/(2*pi)',
'x/(4*pi)',
'x^2/(4*pi)',
'2*(pi*x)^1/2'
),

array(
'2d/5',
'5d/2',
'4*(d^2)/25',
'2*(d^2)/5'
),

array(
'z/2',
'z',
'2z',
'z-x'
),

array(
'-r',
'0',
'2*(q-r)',
'q + r'
),

array(
'$2772',
'$1622',
'$924',
'$870'
),

array(
'625',
'100',
'3125',
'225'
),

array(
'cy/300',
'100/3cy',
'3y/100c',
'3cy/100'
),

array(
'Jan\'s Rate is greater than Marko\'s Rate',
'Marko\'s Rate is greater than Jan\'s Rate',
'Jan\'s Rate and Marko\'s Rate are equal',
'None of the above'
),

array(
'2r+7',
'2r-2',
'(r-7)/2',
'(r-2)/2'
),

array(
'-30',
'-20',
'-5',
'0'
),

array(
'1',
'6',
'11',
'12'
),

array(
'25',
'28',
'27.5',
'26'
),

array(
'Apples',
'Oranges',
'Apples and Oranges',
'Any one of them'
),

array(
'30',
'29',
'28',
'31'
),

array(
'11',
'2',
'3',
'12'
),

array(
'March',
'July',
'Mary',
'None of these'
),

array(
'Black',
'White',
'Any one of them',
'None of these'
),

array(
'36',
'54',
'96',
'Can\'t determine'
),

array(
'1',
'2',
'4',
'6'
),

array(
'Nougat',
'Marshmallow',
'Lollipop',
'Eclair'
),

array(
'Sailfish',
'Firefox',
'Mac',
'Ubuntu'
),

array(
'U.S.A.',
'Russia',
'China',
'England'
),

array(
'1',
'2',
'3',
'4'
),

array(
'Tizen',
'Tron',
'Uber',
'Brew'
),

array(
'6',
'10',
'20',
'60'
),

array(
'.05 dollar',
'.10 dollar',
'.15 dollar',
'None of these'
),

array(
'30 December',
'31 December',
'1 January',
'2 January'
),

array(
'5',
'6',
'10',
'11'
),

array(
'Zero',
'2.5',
'15',
'30'
),

array(
'3',
'6',
'12',
'None of these'
),

array(
'5',
'6',
'10',
'Infinity pizza'
),

array(
'Google',
'Archie',
'Altavista',
'WAIS'
),

array(
'32 bit',
'64 bit',
'128 bit',
'256 bit'
),

array(
'TCS',
'Infosys',
'Wipro',
'IBM'
),

array(
'Friday',
'Saturday',
'Sunday',
'Thursday'
),

array(
'Googleplex',
'Calgary Saddledome',
'Googledome',
'The Pit'
),

array(
'Wave',
'Android',
'Polaris',
'Chrome'
),

array(
'1',
'10',
'100',
'1000'
),

array(
'A',
'B',
'D',
'H'
),

array(
'20',
'10',
'30',
'5'
),

array(
'MONDAY',
'TUESDAY',
'THURSDAY',
'FRIDAY'
),

array(
'7',
'5',
'8',
'6'
),

array(
'32',
'33',
'20',
'30'
),

array(
'2 new stations',
'1 new stations',
'3 new stations',
'4 new stations'
),

array(
'40',
'50',
'45',
'55'
),

array(
'One statement is sufficient and the other statement is not sufficient to answer the question.',
'Either statement taken alone is sufficient to answer the question.',
'The two statements together are sufficient but neither statement alone is sufficient to answer the question.',
'Even both statements together are not sufficient to answer the question'
),

array(
'81.5',
'82',
'82.5',
'80'
),

array(
'55',
'48',
'65',
'45'
),

array(
'12000',
'14000',
'16000',
'10000'
),

array(
'1',
'16',
'14',
'none of these'
),

array(
'8 : 3',
'7 : 5',
'4 : 3',
'2 : 3'
),

array(
'60',
'63',
'50',
'77'
),

array(
'28 liters',
'21 liters',
'45 liters',
'36 liters'
),

array(
'24 liters',
'45 liters',
'49 liters',
'44 liters'
),

array(
'46 Km',
'56 Km',
'62 Km',
'52 Km'
),

array(
'RS 147.50',
'RS 785.50',
'RS 175.50',
'RS 258.50'
),

array(
'Sunday',
'Monday',
'Friday',
'Saturday'
),

array(
'Thursday',
'Sunday',
'Monday',
'Saturday'
),

array(
'48',
'22',
'24',
'12'
),

array(
'24',
'22',
'20',
'21'
),

array(
'3 pm',
'3.45 pm',
'3.30 pm',
'4 pm'
),

array(
'48',
'44',
'24',
'22'
),

array(
'3/5',
'7/12',
'8/15',
'1/5'
),

array(
'5050 seconds',
'5858 seconds',
'2424 seconds',
'2222 seconds'
)

);

$correct = array(
1,2,4,4,2,4,3,2,1,4,3,1,4,1,2,2,4,2,3,1,3,2,3,4,3,3,2,4,4,1,2,3,2,3,2,2,1,3,2,4,3,2,3,2,3,3,4,4,2,4,2,4,2,1,2,1,3,1,4,1,4,3,3,4,3,4,2,3,3,1,4,2,2,1,4,2,3,3,3,3,1,2,4,1,3,3,3,1,1,1,2,2,3,2,2,2,3,4,1,1,2,3,4,2,2,4,1,1,2,2,1,4,3,1,2,2,2,1,2,3,1,4,2,2,4,2,3,3);

function isContain($ind){
	if(isset($_SESSION['yans'])){
		$n = count($_SESSION['yans']);
		for($i=0; $i<$n; $i++){
			if($_SESSION['yans'][$i]==$ind) return true;
		}
	}
	return false;
}

	if(isset($_POST['name'])){
	           $n = count($correct);
	           $ind = rand(0,$n-1);
	        while(isContain($ind)){
	        	 $ind = rand(0,$n-1);
	        }
	        
   	       
		$_SESSION['yans'][count($_SESSION['yans'])] = $ind;
		$response = array($quesArray[$ind],$ansArray[$ind],$correct[$ind]);
		echo json_encode($response);
	}
?>
