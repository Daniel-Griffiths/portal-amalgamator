<?php 

namespace DanielGriffiths\PortalAmalgamator\Portals;

trait RightmoveLocations 
{
	/**
	 * Rightmove uses id's rather than text in its searches.
	 * Below is a full list of locations and their
	 * corresponding id's
	 * 
	 * @var array
	 */
	protected $locationAssociations = [
		'Abbots Langley' => 1,
		'Aberaeron' => 2,
		'Aberdare' => 3,
		'Aberdeen' => 4,
		'Aberdyfi' => 5,
		'Aberfeldy' => 6,
		'Abergavenny' => 7,
		'Abergele' => 8,
		'Aberlour' => 9,
		'Abertillery' => 10,
		'Aberystwyth' => 11,
		'Abingdon-on-Thames' => 12,
		'Aboyne' => 13,
		'Accrington' => 14,
		'Acharacle' => 15,
		'Achnasheen' => 16,
		'Addlestone' => 17,
		'Airdrie' => 18,
		'Alcester' => 19,
		'Aldeburgh' => 20,
		'Alderley Edge' => 21,
		'Aldershot' => 22,
		'Alexandria' => 23,
		'Alford' => 24,
		'Alford' => 25,
		'Alfreton' => 26,
		'Alloa' => 27,
		'Alness' => 28,
		'Alnwick' => 29,
		'Alresford' => 30,
		'Alston' => 31,
		'Alton' => 32,
		'Altrincham' => 33,
		'Alva' => 34,
		'Ambleside' => 35,
		'Amersham' => 36,
		'Amlwch' => 37,
		'Ammanford' => 38,
		'Andover' => 39,
		'Annan' => 40,
		'Anstruther' => 41,
		'Antrim' => 42,
		'Appin' => 43,
		'Appleby-In-Westmorland' => 44,
		'Arbroath' => 45,
		'Ardgay' => 46,
		'Ardrossan' => 47,
		'Arisaig' => 48,
		'Arlesey' => 49,
		'Armagh' => 50,
		'Arrochar' => 51,
		'Arthog' => 52,
		'Arundel' => 53,
		'Ascot' => 54,
		'Ashbourne' => 55,
		'Ashby-De-La-Zouch' => 56,
		'Ashford' => 57,
		'Ashford' => 58,
		'Ashington' => 59,
		'Ashtead' => 60,
		'Ashton-Under-Lyne' => 61,
		'Askam-In-Furness' => 62,
		'Atherstone' => 63,
		'Attleborough' => 64,
		'Auchterarder' => 65,
		'Augher' => 66,
		'Aughnacloy' => 67,
		'Aviemore' => 68,
		'Avoch' => 69,
		'Axbridge' => 70,
		'Axminster' => 71,
		'Aylesbury' => 72,
		'Aylesford' => 73,
		'Ayr' => 74,
		'Bacup' => 75,
		'Badminton' => 76,
		'Bagillt' => 77,
		'Bagshot' => 78,
		'Bakewell' => 79,
		'Bala' => 80,
		'Baldock' => 81,
		'Balerno' => 82,
		'Ballachulish' => 83,
		'Ballater' => 84,
		'Ballindalloch' => 85,
		'Ballycastle' => 86,
		'Ballyclare' => 87,
		'Ballymena' => 88,
		'Ballymoney' => 89,
		'Ballynahinch' => 90,
		'Bamburgh' => 91,
		'Bampton' => 92,
		'Banbridge' => 93,
		'Banbury' => 94,
		'Banchory' => 95,
		'Banff' => 96,
		'Bangor' => 97,
		'Bangor' => 98,
		'Banstead' => 99,
		'Banwell' => 100,
		'Bargoed' => 101,
		'Barking' => 102,
		'Barmouth' => 103,
		'Barnard Castle' => 104,
		'Barnet' => 105,
		'Barnetby' => 106,
		'Barnoldswick' => 107,
		'Barnsley' => 108,
		'Barnstaple' => 109,
		'Barrow-In-Furness' => 110,
		'Barrow-Upon-Humber' => 111,
		'Barry' => 112,
		'Barton-Upon-Humber' => 113,
		'Basildon' => 114,
		'Basingstoke' => 115,
		'Bath' => 116,
		'Bathgate' => 117,
		'Batley' => 118,
		'Battle' => 119,
		'Beaconsfield' => 120,
		'Beaminster' => 121,
		'Beauly' => 122,
		'Beaumaris' => 123,
		'Beaworthy' => 124,
		'Beccles' => 125,
		'Beckenham' => 126,
		'Beckermet' => 127,
		'Bedale' => 128,
		'Bedford' => 129,
		'Bedlington' => 130,
		'Bedworth' => 131,
		'Beith' => 132,
		'Belfast' => 133,
		'Belford' => 134,
		'Bellshill' => 135,
		'Belper' => 136,
		'Belvedere' => 137,
		'Bembridge' => 138,
		'Benfleet' => 139,
		'Berkeley' => 140,
		'Berkhamsted' => 141,
		'Berriedale' => 142,
		'Berwick-Upon-Tweed' => 143,
		'Betchworth' => 144,
		'Betws-y-Coed' => 145,
		'Beverley' => 146,
		'Bewdley' => 147,
		'Bexhill On Sea' => 148,
		'Bexley' => 149,
		'Bexleyheath' => 150,
		'Bicester' => 151,
		'Bideford' => 152,
		'Biggar' => 153,
		'Biggleswade' => 154,
		'Billericay' => 155,
		'Billingham' => 156,
		'Billingshurst' => 157,
		'Bilston' => 158,
		'Bingley' => 159,
		'Birchington' => 160,
		'Birkenhead' => 161,
		'Birmingham' => 162,
		'Bishop Auckland' => 163,
		'Bishop\'s Stortford' => 164,
		'Bishops Castle' => 165,
		'Bishopton' => 166,
		'Blackburn' => 167,
		'Blackpool' => 168,
		'Blackwood' => 169,
		'Blaenau Ffestiniog' => 170,
		'Blairgowrie' => 171,
		'Blakeney' => 172,
		'Blandford Forum' => 173,
		'Blaydon' => 174,
		'Blyth' => 175,
		'Bo\'Ness' => 176,
		'Boat Of Garten' => 177,
		'Bodmin' => 178,
		'Bodorgan' => 179,
		'Bognor Regis' => 180,
		'Boldon Colliery' => 181,
		'Bolton' => 182,
		'Boncath' => 183,
		'Bonnybridge' => 184,
		'Bonnyrigg' => 185,
		'Bootle' => 186,
		'Bordon' => 187,
		'Borehamwood' => 188,
		'Borth' => 189,
		'Boscastle' => 190,
		'Boston' => 191,
		'Bourne' => 192,
		'Bourne End' => 193,
		'Bournemouth' => 194,
		'Bow Street' => 195,
		'Brackley' => 196,
		'Bracknell' => 197,
		'Bradford' => 198,
		'Bradford-On-Avon' => 199,
		'Braintree' => 200,
		'Brampton' => 201,
		'Brandon' => 202,
		'Braunton' => 203,
		'Brechin' => 204,
		'Brecon' => 205,
		'Brentford' => 206,
		'Brentwood' => 207,
		'Bridge Of Orchy' => 208,
		'Bridge Of Weir' => 209,
		'Bridgend' => 210,
		'Bridgnorth' => 211,
		'Bridgwater' => 212,
		'Bridlington' => 213,
		'Bridport' => 214,
		'Brierley Hill' => 215,
		'Brigg' => 216,
		'Brighouse' => 217,
		'Brighton' => 218,
		'Bristol' => 219,
		'Brixham' => 220,
		'Broadstairs' => 221,
		'Broadstone' => 222,
		'Broadway' => 223,
		'Brockenhurst' => 224,
		'Bromley' => 225,
		'Bromsgrove' => 226,
		'Bromyard' => 227,
		'Brora' => 228,
		'Broseley' => 229,
		'Brough' => 230,
		'Broughton-In-Furness' => 231,
		'Broxbourne' => 232,
		'Broxburn' => 233,
		'Bruton' => 234,
		'Brynteg' => 235,
		'Buckfastleigh' => 236,
		'Buckhurst Hill' => 237,
		'Buckie' => 238,
		'Buckingham' => 239,
		'Buckley' => 240,
		'Bucknell' => 241,
		'Bude' => 242,
		'Budleigh Salterton' => 243,
		'Builth Wells' => 244,
		'Bungay' => 245,
		'Buntingford' => 246,
		'Bures' => 247,
		'Burford' => 248,
		'Burgess Hill' => 249,
		'Burnham-On-Crouch' => 250,
		'Burnham-On-Sea' => 251,
		'Burnley' => 252,
		'Burntisland' => 253,
		'Burntwood' => 254,
		'Burry Port' => 255,
		'Burton-On-Trent' => 256,
		'Bury' => 257,
		'Bury St. Edmunds' => 258,
		'Bushey' => 259,
		'Bushmills' => 260,
		'Buxton' => 261,
		'Caernarfon' => 262,
		'Caerphilly' => 263,
		'Caersws' => 264,
		'Cairndow' => 265,
		'Caldicot' => 266,
		'Caledon' => 267,
		'Callander' => 268,
		'Callington' => 269,
		'Calne' => 270,
		'Calstock' => 271,
		'Camberley' => 272,
		'Camborne' => 273,
		'Cambridge' => 274,
		'Camelford' => 275,
		'Campbeltown' => 276,
		'Cannock' => 277,
		'Canonbie' => 278,
		'Canterbury' => 279,
		'Canvey Island' => 280,
		'Cardiff' => 281,
		'Cardigan' => 282,
		'Carlisle' => 283,
		'Carluke' => 284,
		'Carmarthen' => 285,
		'Carnforth' => 286,
		'Carnoustie' => 287,
		'Carrbridge' => 288,
		'Carrickfergus' => 289,
		'Carshalton' => 290,
		'Carterton' => 291,
		'Castle Cary' => 292,
		'Castle Douglas' => 293,
		'Castlederg' => 294,
		'Castleford' => 295,
		'Castlewellan' => 296,
		'Caterham' => 297,
		'Catterick Garrison' => 298,
		'Cemaes Bay' => 299,
		'Chalfont St. Giles' => 300,
		'Chard' => 301,
		'Chatham' => 302,
		'Chathill' => 303,
		'Chatteris' => 304,
		'Cheadle' => 305,
		'Cheddar' => 306,
		'Chelmsford' => 307,
		'Cheltenham' => 308,
		'Chepstow' => 309,
		'Chertsey' => 310,
		'Chesham' => 311,
		'Chessington' => 312,
		'Chester' => 313,
		'Chester Le Street' => 314,
		'Chesterfield' => 315,
		'Chichester' => 316,
		'Chigwell' => 317,
		'Chinnor' => 318,
		'Chippenham' => 319,
		'Chipping Campden' => 320,
		'Chipping Norton' => 321,
		'Chislehurst' => 322,
		'Choppington' => 323,
		'Chorley' => 324,
		'Christchurch' => 325,
		'Chulmleigh' => 326,
		'Church Stretton' => 327,
		'Cinderford' => 328,
		'Cirencester' => 329,
		'Clackmannan' => 330,
		'Clacton-On-Sea' => 331,
		'Clarbeston Road' => 332,
		'Cleator' => 333,
		'Cleator Moor' => 334,
		'Cleckheaton' => 335,
		'Cleethorpes' => 336,
		'Clevedon' => 337,
		'Clitheroe' => 338,
		'Clogher' => 339,
		'Clydebank' => 340,
		'Clynderwen' => 341,
		'Coalville' => 342,
		'Coatbridge' => 343,
		'Cobham' => 344,
		'Cockburnspath' => 345,
		'Cockermouth' => 346,
		'Colchester' => 347,
		'Coldstream' => 348,
		'Coleford' => 349,
		'Coleraine' => 350,
		'Colintraive' => 351,
		'Colne' => 352,
		'Colwyn Bay' => 353,
		'Colyton' => 354,
		'Congleton' => 355,
		'Coniston' => 356,
		'Consett' => 357,
		'Conwy (Town)' => 358,
		'Cookstown' => 359,
		'Corbridge' => 360,
		'Corby' => 361,
		'Cornhill-On-Tweed' => 362,
		'Corrour' => 363,
		'Corsham' => 364,
		'Corwen' => 365,
		'Cottingham' => 366,
		'Coulsdon' => 367,
		'Coventry' => 368,
		'Cowbridge' => 369,
		'Cowdenbeath' => 370,
		'Cowes' => 371,
		'Cradley Heath' => 372,
		'Craigavon' => 373,
		'Cramlington' => 374,
		'Cranbrook' => 375,
		'Cranleigh' => 376,
		'Craven Arms' => 377,
		'Crawley' => 378,
		'Crediton' => 379,
		'Crewe' => 380,
		'Crewkerne' => 381,
		'Crianlarich' => 382,
		'Criccieth' => 383,
		'Crickhowell' => 384,
		'Crieff' => 385,
		'Cromarty' => 386,
		'Cromer' => 387,
		'Crook' => 388,
		'Crowborough' => 389,
		'Crowthorne' => 390,
		'Croydon' => 391,
		'Crumlin' => 392,
		'Crymych' => 393,
		'Cullompton' => 394,
		'Cumnock' => 395,
		'Cupar' => 396,
		'Currie' => 397,
		'Cwmbran' => 398,
		'Dagenham' => 399,
		'Dalbeattie' => 400,
		'Dalkeith' => 401,
		'Dalmally' => 402,
		'Dalry' => 403,
		'Dalton-In-Furness' => 404,
		'Dalwhinnie' => 405,
		'Darlington' => 406,
		'Dartford' => 407,
		'Dartmouth' => 408,
		'Darvel' => 409,
		'Darwen' => 410,
		'Daventry' => 411,
		'Dawlish' => 412,
		'Deal' => 413,
		'Deeside' => 414,
		'Delabole' => 415,
		'Denbigh' => 416,
		'Denny' => 417,
		'Derby' => 418,
		'Dereham' => 419,
		'Devizes' => 420,
		'Dewsbury' => 421,
		'Didcot' => 422,
		'Dinas Powys' => 423,
		'Dingwall' => 424,
		'Diss' => 425,
		'Dolgellau' => 426,
		'Dollar' => 427,
		'Dolwyddelan' => 428,
		'Donaghadee' => 429,
		'Doncaster' => 430,
		'Dorchester' => 431,
		'Dorking' => 432,
		'Dornoch' => 433,
		'Doune' => 434,
		'Dover' => 435,
		'Downham Market' => 436,
		'Downpatrick' => 437,
		'Driffield' => 438,
		'Droitwich' => 439,
		'Dromore' => 440,
		'Dronfield' => 441,
		'Drybrook' => 442,
		'Dudley' => 443,
		'Dukinfield' => 444,
		'Dulas' => 445,
		'Dulverton' => 446,
		'Dumbarton' => 447,
		'Dumfries' => 448,
		'Dunbar' => 449,
		'Dunbeath' => 450,
		'Dunblane' => 451,
		'Dundee' => 452,
		'Dunfermline' => 453,
		'Dungannon' => 454,
		'Dunkeld' => 455,
		'Dunmow' => 456,
		'Dunoon' => 457,
		'Duns' => 458,
		'Dunstable' => 459,
		'Durham' => 460,
		'Dursley' => 461,
		'Dyffryn Ardudwy' => 462,
		'Dymock' => 463,
		'Earlston' => 464,
		'East Boldon' => 465,
		'East Cowes' => 466,
		'East Grinstead' => 467,
		'East Linton' => 468,
		'East Molesey' => 469,
		'Eastbourne' => 470,
		'Eastleigh' => 471,
		'Ebbw Vale' => 472,
		'Edenbridge' => 473,
		'Edgware' => 474,
		'Edinburgh' => 475,
		'Egham' => 476,
		'Egremont' => 477,
		'Elgin' => 478,
		'Elland' => 479,
		'Ellesmere' => 480,
		'Ellesmere Port' => 481,
		'Ellon' => 482,
		'Ely' => 483,
		'Emsworth' => 484,
		'Enfield' => 485,
		'Enniskillen' => 486,
		'Epping' => 487,
		'Epsom' => 488,
		'Erith' => 489,
		'Erskine' => 490,
		'Esher' => 491,
		'Etchingham' => 492,
		'Evesham' => 493,
		'Exeter' => 494,
		'Exmouth' => 495,
		'Eye' => 496,
		'Eyemouth' => 497,
		'Fairbourne' => 498,
		'Fairford' => 499,
		'Fakenham' => 500,
		'Falkirk' => 501,
		'Falmouth' => 502,
		'Fareham' => 503,
		'Faringdon' => 504,
		'Farnborough' => 505,
		'Farnham' => 506,
		'Faversham' => 507,
		'Felixstowe' => 508,
		'Feltham' => 509,
		'Ferndale' => 510,
		'Ferndown' => 511,
		'Ferryhill' => 512,
		'Ferryside' => 513,
		'Filey' => 514,
		'Fishguard' => 515,
		'Fivemiletown' => 516,
		'Fleet' => 517,
		'Fleetwood' => 518,
		'Flint' => 519,
		'Fochabers' => 520,
		'Folkestone' => 521,
		'Fordingbridge' => 522,
		'Forest Row' => 523,
		'Forfar' => 524,
		'Forres' => 525,
		'Forsinard' => 526,
		'Fort Augustus' => 527,
		'Fort William' => 528,
		'Fortrose' => 529,
		'Fowey' => 530,
		'Fraserburgh' => 531,
		'Freshwater' => 532,
		'Frinton-On-Sea' => 533,
		'Frizington' => 534,
		'Frodsham' => 535,
		'Frome' => 536,
		'Gaerwen' => 537,
		'Gainsborough' => 538,
		'Gairloch' => 539,
		'Galashiels' => 540,
		'Galston' => 541,
		'Garndolbenmaen' => 542,
		'Garve' => 543,
		'Gateshead' => 544,
		'Gatwick' => 545,
		'Gerrards Cross' => 546,
		'Gillingham' => 547,
		'Gillingham' => 548,
		'Girvan' => 549,
		'Glasgow' => 550,
		'Glastonbury' => 551,
		'Glenfinnan' => 552,
		'Glenrothes' => 553,
		'Glogue' => 554,
		'Glossop' => 555,
		'Gloucester' => 556,
		'Godalming' => 557,
		'Godstone' => 558,
		'Golspie' => 559,
		'Goodwick' => 560,
		'Goole' => 561,
		'Gordon' => 562,
		'Gorebridge' => 563,
		'Gosport' => 564,
		'Gourock' => 565,
		'Grange-Over-Sands' => 566,
		'Grangemouth' => 567,
		'Grantham' => 568,
		'Grantown-On-Spey' => 569,
		'Gravesend' => 570,
		'Grays' => 571,
		'Great Missenden' => 572,
		'Great Yarmouth' => 573,
		'Greenford' => 574,
		'Greenhithe' => 575,
		'Greenock' => 576,
		'Gretna' => 577,
		'Grimsby' => 578,
		'Guernsey' => 579,
		'Guildford' => 580,
		'Guisborough' => 581,
		'Gullane' => 582,
		'Gunnislake' => 583,
		'Haddington' => 584,
		'Hailsham' => 585,
		'Halesowen' => 586,
		'Halesworth' => 587,
		'Halifax' => 588,
		'Halkirk' => 589,
		'Halstead' => 590,
		'Haltwhistle' => 591,
		'Hamilton' => 592,
		'Hampton' => 593,
		'Harlech' => 594,
		'Harleston' => 595,
		'Harlow' => 596,
		'Harpenden' => 597,
		'Harrogate' => 598,
		'Harrow' => 599,
		'Hartfield' => 600,
		'Hartlepool' => 601,
		'Harwich' => 602,
		'Haslemere' => 603,
		'Hassocks' => 604,
		'Hastings' => 605,
		'Hatfield' => 606,
		'Havant' => 607,
		'Haverfordwest' => 608,
		'Haverhill' => 609,
		'Hawes' => 610,
		'Hawick' => 611,
		'Hayes' => 612,
		'Hayle' => 613,
		'Hayling Island' => 614,
		'Haywards Heath' => 615,
		'Heanor' => 616,
		'Heathfield' => 617,
		'Hebburn' => 618,
		'Hebden Bridge' => 619,
		'Heckmondwike' => 620,
		'Helensburgh' => 621,
	];
}

