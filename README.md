# NewJerseyWeedAPI
This project scrapes all of the current New Jersey Marijuana Dispensaries for prices.

There are only a handful of shops in New Jersey so running a manual scraper for each one is trivial. 

You must set up a database with a `shops` table and a `products` table. 

# Locations in CSV format
|The Botanist By CCF - EHT          |EHT           |https://www.shopbotanist.com/locations/egg-harbor-township/                              |609-227-7547   |100 Century Dr Egg Harbor Township NJ 08234      |
|-----------------------------------|--------------|-----------------------------------------------------------------------------------------|---------------|-------------------------------------------------|
|The Botanist By CCF - Atlantic City|ATLANTIC CITY |https://www.shopbotanist.com/locations/atlantic-city/hours-and-info/                     |609-454-6846   |1301 Boardwalk Atlantic City NJ 08401            |
|Curaleaf - Bellmawr                |BELLMAWR      |https://curaleaf.com/shop/new-jersey/curaleaf-nj-bellmawr?                               |856-933-8700   |640 Creek Rd Bellmawr NJ 08031                   |
|Curaleaf - Edgewater Park          |EDGEWATER PARK|https://curaleaf.com/dispensary/new-jersey/curaleaf-nj-edgewater-park/info               |609-232-7681   |4237 US-130 Edgewater Park New Jersey 08010      |
|Curaleaf - Bordentown              |BORDENTOWN    |https://curaleaf.com/dispensary/new-jersey/curaleaf-nj-bordentown/info                   |609-400-2455   |191 Route 130 Bordentown NJ 08505                |
|RISE Dispensaries - Bloomfield     |BLOOMFIELD    |https://risecannabis.com/dispensaries/new-jersey/bloomfield/                             |973-327-3442   |26-48 Bloomfield Av, Bloomfield, NJ 07003        |
|RISE Dispensaries                  |PARAMUS       |https://risecannabis.com/dispensaries/new-jersey/paramus/                                |973-996-4570   |145 Rte 4, Paramus NJ 07652                      |
|Breakwater Treatment & Wellness    |CRANBURY      |https://www.breakwateratc.com/                                                           |732-703-7300   |2 Corporate Dr Cranbury NJ 08512                 |
|The Cannabist                      |DEPTFORD      |https://gocannabist.com/location/deptford/                                               |856-322-2829   |1692 Clements Bridge Rd Deptford NJ 08096        |
|Garden State Dispensary            |EATONTOWN     |https://gardenstatedispensary.com/locations/eatontown                                    |848 999-2005   |59 Main St Eatontown NJ 07724                    |
|Zen Leaf                           |ELIZABETH     |https://zenleafdispensaries.com/locations/?_states_on_map=new-jersey                     |908-676-5936   |117 Spring St Elizabeth NJ 07201                 |
|Zen Leaf                           |LAWRENCE      |https://zenleafdispensaries.com/locations/?_states_on_map=new-jersey                     |908-676-5936   |3256 Brunswick Pike Lawrence Township NJ 08648   |
|Zen Leaf                           |NEPTUNE       |https://zenleafdispensaries.com/locations/?_states_on_map=new-jersey                     |908-676-5936   |2100 Route 66  Neptune Township  NJ 07753        |
|RISE Medical Marijuana Dispensary  |PATERSON      |https://risecannabis.com/dispensaries/new-jersey/paterson/?utm_source=PotGuide&sid=825788|973-440-2717   |196 3rd Ave #3c Paterson, NJ 07514               |
|The Apothecarium                   |MAPLEWOOD     |https://apothecariumnj.com/maplewood/                                                    |(973) 996-1420 |1865 SPRINGFIELD AVE MAPLEWOOD NJ 07040          |
|Ascend Montclair                   |MONTCLAIR     |https://letsascend.com/location/montclair/                                               |862-339-6770   |395 Bloomfield Ave, Montclair NJ 07042           |
|RISE Medical Marijuana Dispensary  |PARAMUS       |https://risecannabis.com/dispensaries/new-jersey/paramus/                                |(973) 996-4570 |145 Rte 4 Paramus NJ 07652                       |
|RISE Medical Marijuana Dispensary  |PATERSON      |https://risecannabis.com/dispensaries/new-jersey/paterson                                |973-440-2717   |196 3rd Ave #3c Paterson NJ 07514                |
|The Apothecarium                   |PHILLIPSBURG  |https://apothecariumnj.com/phillipsburg/                                                 |(908) 777-7420 |55 S Main St Phillipsburg NJ 08865               |
|Ascend                             |Rochelle Park |https://letsascend.com/locations/?loc=109&ifso=NJ                                        |(973) 370-3150 |174 Route 17 North Rochelle Park NJ 07662        |
|Harmony Dispensaries               |SEACAUCUS     |https://www.harmonydispensary.org/new-harmony-home                                       |(201) 356-7268 |600 Meadowlands Pkwy Ste 15 Secaucus NJ 07094    |
|Garden State Dispensary - Union    |Union         |https://gardenstatedispensary.com/?sid=825582                                            |(848) 999-2005 |2536 US-22 Union NJ 07083                        |
|The Botanist                       |Williamstown  |https://www.shopbotanist.com/locations/williamstown/hours-and-info/                      |(856) 478-35304|2090 North Black Horse Pike Williamstown NJ 08094|
|Garden State Dispensary            |Woodbridge    |https://gardenstatedispensary.com/?sid=669923                                            |(848) 999-2005 |2090 North Black Horse Pike Williamstown NJ 08094|

