<?php
/** Kalaallisut (Kalaallisut)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Aputtu
 * @author Kaare
 * @author Piivaat
 * @author לערי ריינהארט
 */

$fallback = 'da';

$messages = array(
# Dates
'sunday'        => 'Sapaat',
'monday'        => 'Ataasinngorneq',
'tuesday'       => 'Marlunngorneq',
'wednesday'     => 'Pingasunngorneq',
'thursday'      => 'Sisamanngorneq',
'friday'        => 'Tallimanngorneq',
'saturday'      => 'Arfininngorneq',
'sun'           => 'Sap',
'mon'           => 'Ata',
'tue'           => 'Mar',
'wed'           => 'Pin',
'thu'           => 'Sis',
'fri'           => 'Tal',
'sat'           => 'Arf',
'january'       => 'Jannuaari',
'february'      => 'Februaari',
'march'         => 'Martsi',
'april'         => 'Apriili',
'may_long'      => 'Maaji',
'june'          => 'Juuni',
'july'          => 'Juuli',
'august'        => 'Aggusti',
'september'     => 'Septemberi',
'october'       => 'Oktoberi',
'november'      => 'Novemberi',
'december'      => 'Decemberi',
'january-gen'   => 'Januaari',
'february-gen'  => 'Februaari',
'march-gen'     => 'Marsi',
'april-gen'     => 'Apriili',
'may-gen'       => 'Maaji',
'june-gen'      => 'Juuni',
'july-gen'      => 'Juuli',
'august-gen'    => 'Aggusti',
'september-gen' => 'Septembari',
'october-gen'   => 'Oktobari',
'november-gen'  => 'Novembari',
'december-gen'  => 'Decembari',
'jan'           => 'Jan',
'feb'           => 'Feb',
'mar'           => 'Mar',
'apr'           => 'Apr',
'may'           => 'Maa',
'jun'           => 'Jun',
'jul'           => 'Jul',
'aug'           => 'Aug',
'sep'           => 'Sep',
'oct'           => 'Okt',
'nov'           => 'Nov',
'dec'           => 'Dec',

'about'         => 'Pillugu',
'cancel'        => 'Sussa',
'qbfind'        => 'Naniuk',
'qbedit'        => 'Aaqqissuutiguk',
'moredotdotdot' => 'Suli...',

'errorpagetitle'   => 'Kukkuneq',
'tagline'          => 'Matumannga {{SITENAME}}',
'help'             => 'Ikiortissamik',
'search'           => 'Ujarlerit',
'searchbutton'     => 'Ujarlerit',
'go'               => 'Ikunnarit',
'searcharticle'    => 'Tassunngarit',
'history'          => 'Oqaluttuassartaa',
'history_short'    => 'Oqaluttuassartaa',
'info_short'       => 'Ilisimasat',
'printableversion' => 'Naqikkuminartoq',
'edit'             => 'Aaqqissuuguk',
'create'           => 'pilersitsineq',
'delete'           => 'Piiaruk',
'deletethispage'   => 'Qupperneq piiaruk',
'protect'          => 'Illersorpaa',
'newpage'          => 'Qupperneq nutaaq',
'talkpagelinktext' => 'Oqallinneq',
'talk'             => 'Oqallinneq',
'toolbox'          => 'Sannataasivik',
'otherlanguages'   => 'Oqaatsit allat',
'jumpto'           => 'Toqqaannarlugu:',
'jumptonavigation' => 'navigationi',
'jumptosearch'     => 'ujarlerit',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite'            => '{{SITENAME}} pillugu',
'aboutpage'            => 'Project:Pillugu',
'currentevents'        => 'Maannakkut pisut',
'edithelp'             => 'Ikiuutit',
'edithelppage'         => 'Help:Aaqqissuussineq',
'helppage'             => 'Help:Ikiuutit',
'mainpage'             => 'Saqqaa',
'mainpage-description' => 'Saqqaa',
'portal'               => 'Allaatiginnittartup saqqai',

'youhavenewmessages'  => 'Peqarputit $1 ($2)',
'newmessageslink'     => 'oqariartuutinik nutaanik',
'newmessagesdifflink' => 'allannguutini kingullernili',
'editsection'         => 'aaqqissuuguk',
'editold'             => 'aaqqissuuguk',
'editlink'            => 'aaqqissuuguk',
'editsectionhint'     => 'Aaqqissuuguk immikkoortoq: $1',
'toc'                 => 'Imarisai',
'site-rss-feed'       => '$1 RSS Feed',
'site-atom-feed'      => '$1 Atom Feed',
'page-rss-feed'       => '"$1" RSS Feed',
'red-link-title'      => '$1 (Qupperneq suli allaffigineqanngilaq)',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main'     => 'Qupperneq',
'nstab-image'    => 'Assiliaq',
'nstab-template' => 'Ilisserut',
'nstab-help'     => 'Ikiuutit',
'nstab-category' => 'Sumut atassuseq',

# Login and logout pages
'yourname'                   => 'Atuisup aqqa:',
'yourpassword'               => 'Isissutissaq:',
'yourpasswordagain'          => 'Isissutissaq (aappassaat):',
'login'                      => 'Iserfigiuk',
'gotaccountlink'             => 'Iserfigiuk',
'acct_creation_throttle_hit' => 'Konto-mik pilersitsereersimagavit pilersitseqqissinnaanngilatit, IP-adressit malillugu.
Taamaattumik maannakkorpiaq kontomik pilersitsisinnaanngilatit.',

# Password reset dialog
'oldpassword' => 'Isissutissatoqaq:',
'newpassword' => 'Isissutissaq nutaaq:',
'retypenew'   => 'Isissutissaq nutaaq (aappassaat):',

# Edit pages
'summary'      => 'Qanoq issusersiuineq:',
'savearticle'  => 'Toqqoruk',
'preview'      => 'Isikkua',
'showpreview'  => 'Isikkua takuuk',
'showdiff'     => 'Allannguutit',
'accmailtitle' => 'Password-i nassiunneqarsimavoq.',
'accmailtext'  => 'Password-i "$1" $2-mut nassiunneqarsimavoq.',
'newarticle'   => '(Nuutaq)',
'previewnote'  => 'Eqqaamallugu isikkua takutinneqaannarpoq, toqqorneqanngilaq suli!',

# Search results
'powersearch' => 'Ujarlerit',

# Recent changes
'recentchanges'   => 'Allannguutit kingulliit',
'hist'            => 'hist',
'minoreditletter' => 'm',
'newpageletter'   => 'N',
'boteditletter'   => 'b',

# Recent changes linked
'recentchangeslinked' => 'Allannguutit naleqqiussat',

# Upload
'upload' => 'Fiili nassiuguk',

# File description page
'filehist-user' => 'Pineqartoq',

# MIME search
'mimesearch' => 'MIME ujaarlerit',

# Random page
'randompage' => 'Nalaatsorluni atuagassianut ilanngutassiaq',

# Statistics
'statistics' => 'Kisitsisinngorlugit paasissutissat',

# Miscellaneous special pages
'newpages' => 'Quppernerit nutaat',
'move'     => 'Nuunneq',

# Special:Log
'specialloguserlabel' => 'Pineqartoq:',

# Special:AllPages
'allarticles'    => 'Quppernerit tamarmik',
'allpagessubmit' => 'Tassunngarit',

# Watchlist
'addedwatch'     => 'Nakkutilliinermi allattorsimaffimmut ilanngunneqarsimavoq',
'addedwatchtext' => "Qupperneq \"[[:\$1]]\" ilanngunneqarsimavoq [[Special:Watchlist|nakkutilliinermut allattorsimaffimmut]] ilanngunneqarsimavoq. Matumani quppernermi siunissami allannguutit, aammalu oqallinnermi qupperneq, maani saqqummersinneqassapput, quppernerlu '''erseqqissagaasoq''' inisseqqassalluni [[Special:RecentChanges|allattorsimaffik kingullermi allannguutinik imalik]] ajornannginnerussammat nassaariniarnissaanut.

Qupperneq nakkutilliinermi allattorsimaffik kingusinnerusukkut piissagukku, taava quppernerup sinaatungaani \"Nakkutilliinermi allattorsimaffik peeruk\" tooruk.",
'watch'          => 'Ersippoq',
'unwatch'        => 'Ersitsinnagu',

# Delete
'actioncomplete' => 'Naammassineqareersimavoq',

# Protect
'prot_1movedto2' => '[[$1]]-i nuunneqarsimavoq [[$2]]-mut',

# Contributions
'uctop' => '(kaarfa)',

# What links here
'whatlinkshere' => 'Suna maangamut innersuussisoq',

# Block/unblock
'blocklink' => 'aporfeqarneq',

# Move page
'1movedto2'       => '[[$1]]-i nuunneqarsimavoq [[$2]]-mut',
'1movedto2_redir' => '[[$1]] nuunneqarsimavoq [[$2]]-mut adresse-ia aqqutigalugu allanngortillugu',

# Tooltip help for the actions
'tooltip-search' => 'Ujaarlerit {{SITENAME}}',

# Special:SpecialPages
'specialpages' => 'Quppernerit immikkut ittut',

);
