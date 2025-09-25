# Startup Error

On Web:

```text
MediaWiki internal error.

Original exception: [641831be662f2ff379adc5f5] / Wikimedia\Rdbms\DBQueryError: A database query error has occurred. Did you forget to run your application's database schema updater after upgrading or after adding a new extension?

Please see https://www.mediawiki.org/wiki/Special:MyLanguage/Manual:Upgrading and https://www.mediawiki.org/wiki/Special:MyLanguage/Manual:How_to_debug for more information.

Error 1146: Table 'mediawiki.l10n_cache' doesn't exist
Function: LCStoreDB::get
Query: SELECT lc_value FROM `l10n_cache` WHERE lc_lang = 'en' AND lc_key = 'deps' LIMIT 1

Backtrace:
from /var/www/mediawiki/w/includes/libs/rdbms/database/Database.php(1198)
#0 /var/www/mediawiki/w/includes/libs/rdbms/database/Database.php(1182): Wikimedia\Rdbms\Database->getQueryException()
#1 /var/www/mediawiki/w/includes/libs/rdbms/database/Database.php(1156): Wikimedia\Rdbms\Database->getQueryExceptionAndLog()
#2 /var/www/mediawiki/w/includes/libs/rdbms/database/Database.php(647): Wikimedia\Rdbms\Database->reportQueryError()
#3 /var/www/mediawiki/w/includes/libs/rdbms/database/Database.php(1345): Wikimedia\Rdbms\Database->query()
#4 /var/www/mediawiki/w/includes/libs/rdbms/database/Database.php(1296): Wikimedia\Rdbms\Database->select()
#5 /var/www/mediawiki/w/includes/libs/rdbms/database/DBConnRef.php(127): Wikimedia\Rdbms\Database->selectField()
#6 /var/www/mediawiki/w/includes/libs/rdbms/database/DBConnRef.php(338): Wikimedia\Rdbms\DBConnRef->__call()
#7 /var/www/mediawiki/w/includes/libs/rdbms/querybuilder/SelectQueryBuilder.php(763): Wikimedia\Rdbms\DBConnRef->selectField()
#8 /var/www/mediawiki/w/includes/language/LCStoreDB.php(65): Wikimedia\Rdbms\SelectQueryBuilder->fetchField()
#9 /var/www/mediawiki/w/includes/language/LocalisationCache.php(566): LCStoreDB->get()
#10 /var/www/mediawiki/w/includes/language/LocalisationCache.php(612): LocalisationCache->isExpired()
#11 /var/www/mediawiki/w/includes/language/LocalisationCache.php(523): LocalisationCache->initLanguage()
#12 /var/www/mediawiki/w/includes/language/LocalisationCache.php(403): LocalisationCache->loadSubitem()
#13 /var/www/mediawiki/w/includes/language/LocalisationCache.php(419): LocalisationCache->getSubitem()
#14 /var/www/mediawiki/w/includes/language/MessageCache.php(1267): LocalisationCache->getSubitemWithSource()
#15 /var/www/mediawiki/w/includes/language/MessageCache.php(1209): MessageCache->getMessageForLang()
#16 /var/www/mediawiki/w/includes/language/MessageCache.php(1106): MessageCache->getMessageFromFallbackChain()
#17 /var/www/mediawiki/w/includes/Message/Message.php(1554): MessageCache->get()
#18 /var/www/mediawiki/w/includes/Message/Message.php(1036): MediaWiki\Message\Message->fetchMessage()
#19 /var/www/mediawiki/w/includes/Message/Message.php(1127): MediaWiki\Message\Message->format()
#20 /var/www/mediawiki/w/includes/title/MalformedTitleException.php(61): MediaWiki\Message\Message->text()
#21 /var/www/mediawiki/w/includes/title/MediaWikiTitleCodec.php(93): MediaWiki\Title\MalformedTitleException->__construct()
#22 /var/www/mediawiki/w/includes/title/MediaWikiTitleCodec.php(403): MediaWiki\Title\MediaWikiTitleCodec::MediaWiki\Title\{closure}()
#23 /var/www/mediawiki/w/includes/title/Title.php(2751): MediaWiki\Title\MediaWikiTitleCodec->splitTitleString()
#24 /var/www/mediawiki/w/includes/title/Title.php(509): MediaWiki\Title\Title->secureAndSplit()
#25 /var/www/mediawiki/w/includes/actions/ActionEntryPoint.php(241): MediaWiki\Title\Title::newFromURL()
#26 /var/www/mediawiki/w/includes/actions/ActionEntryPoint.php(332): MediaWiki\Actions\ActionEntryPoint->parseTitle()
#27 /var/www/mediawiki/w/includes/actions/ActionEntryPoint.php(94): MediaWiki\Actions\ActionEntryPoint->getTitle()
#28 /var/www/mediawiki/w/includes/MediaWikiEntryPoint.php(200): MediaWiki\Actions\ActionEntryPoint->execute()
#29 /var/www/mediawiki/w/index.php(58): MediaWiki\MediaWikiEntryPoint->run()
#30 {main}

Exception caught inside exception handler: [641831be662f2ff379adc5f5] / Wikimedia\Rdbms\DBQueryError: A database query error has occurred. Did you forget to run your application's database schema updater after upgrading or after adding a new extension?

Please see https://www.mediawiki.org/wiki/Special:MyLanguage/Manual:Upgrading and https://www.mediawiki.org/wiki/Special:MyLanguage/Manual:How_to_debug for more information.

Error 1146: Table 'mediawiki.l10n_cache' doesn't exist
Function: LCStoreDB::get
Query: SELECT lc_value FROM `l10n_cache` WHERE lc_lang = 'en' AND lc_key = 'messages:internalerror' LIMIT 1

Backtrace:
from /var/www/mediawiki/w/includes/libs/rdbms/database/Database.php(1198)
#0 /var/www/mediawiki/w/includes/libs/rdbms/database/Database.php(1182): Wikimedia\Rdbms\Database->getQueryException()
#1 /var/www/mediawiki/w/includes/libs/rdbms/database/Database.php(1156): Wikimedia\Rdbms\Database->getQueryExceptionAndLog()
#2 /var/www/mediawiki/w/includes/libs/rdbms/database/Database.php(647): Wikimedia\Rdbms\Database->reportQueryError()
#3 /var/www/mediawiki/w/includes/libs/rdbms/database/Database.php(1345): Wikimedia\Rdbms\Database->query()
#4 /var/www/mediawiki/w/includes/libs/rdbms/database/Database.php(1296): Wikimedia\Rdbms\Database->select()
#5 /var/www/mediawiki/w/includes/libs/rdbms/database/DBConnRef.php(127): Wikimedia\Rdbms\Database->selectField()
#6 /var/www/mediawiki/w/includes/libs/rdbms/database/DBConnRef.php(338): Wikimedia\Rdbms\DBConnRef->__call()
#7 /var/www/mediawiki/w/includes/libs/rdbms/querybuilder/SelectQueryBuilder.php(763): Wikimedia\Rdbms\DBConnRef->selectField()
#8 /var/www/mediawiki/w/includes/language/LCStoreDB.php(65): Wikimedia\Rdbms\SelectQueryBuilder->fetchField()
#9 /var/www/mediawiki/w/includes/language/LocalisationCache.php(539): LCStoreDB->get()
#10 /var/www/mediawiki/w/includes/language/LocalisationCache.php(403): LocalisationCache->loadSubitem()
#11 /var/www/mediawiki/w/includes/language/LocalisationCache.php(419): LocalisationCache->getSubitem()
#12 /var/www/mediawiki/w/includes/language/MessageCache.php(1267): LocalisationCache->getSubitemWithSource()
#13 /var/www/mediawiki/w/includes/language/MessageCache.php(1209): MessageCache->getMessageForLang()
#14 /var/www/mediawiki/w/includes/language/MessageCache.php(1106): MessageCache->getMessageFromFallbackChain()
#15 /var/www/mediawiki/w/includes/Message/Message.php(1554): MessageCache->get()
#16 /var/www/mediawiki/w/includes/Message/Message.php(1036): MediaWiki\Message\Message->fetchMessage()
#17 /var/www/mediawiki/w/includes/Message/Message.php(1127): MediaWiki\Message\Message->format()
#18 /var/www/mediawiki/w/includes/exception/MWExceptionRenderer.php(253): MediaWiki\Message\Message->text()
#19 /var/www/mediawiki/w/includes/exception/MWExceptionRenderer.php(193): MWExceptionRenderer::msg()
#20 /var/www/mediawiki/w/includes/exception/MWExceptionRenderer.php(109): MWExceptionRenderer::reportHTML()
#21 /var/www/mediawiki/w/includes/exception/MWExceptionHandler.php(135): MWExceptionRenderer::output()
#22 /var/www/mediawiki/w/includes/exception/MWExceptionHandler.php(239): MWExceptionHandler::report()
#23 /var/www/mediawiki/w/includes/MediaWikiEntryPoint.php(222): MWExceptionHandler::handleException()
#24 /var/www/mediawiki/w/includes/actions/ActionEntryPoint.php(82): MediaWiki\MediaWikiEntryPoint->handleTopLevelError()
#25 /var/www/mediawiki/w/includes/MediaWikiEntryPoint.php(206): MediaWiki\Actions\ActionEntryPoint->handleTopLevelError()
#26 /var/www/mediawiki/w/index.php(58): MediaWiki\MediaWikiEntryPoint->run()
#27 {main}

```

On Console:

```text
2025-09-17T16:03:16.300490486+02:00 stderr F + . /functions.sh
2025-09-17T16:03:16.300769981+02:00 stderr F + /create-symlinks.sh
2025-09-17T16:03:16.304573589+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/AJAXPoll': Is a directory
2025-09-17T16:03:16.304602686+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/AWS': Is a directory
2025-09-17T16:03:16.304602686+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/AdminLinks': Is a directory
2025-09-17T16:03:16.304615245+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/AdvancedSearch': Is a directory
2025-09-17T16:03:16.304659480+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/AntiSpoof': Is a directory
2025-09-17T16:03:16.304674883+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/ApprovedRevs': Is a directory
2025-09-17T16:03:16.304685509+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/Arrays': Is a directory
2025-09-17T16:03:16.304696125+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/Babel': Is a directory
2025-09-17T16:03:16.304708664+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/BetaFeatures': Is a directory
2025-09-17T16:03:16.304720867+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/Bootstrap': Is a directory
2025-09-17T16:03:16.304733178+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/BootstrapComponents': Is a directory
2025-09-17T16:03:16.304745348+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/BreadCrumbs2': Is a directory
2025-09-17T16:03:16.304757662+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/CLDR': Is a directory
2025-09-17T16:03:16.304769897+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/Cargo': Is a directory
2025-09-17T16:03:16.304782213+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/CharInsert': Is a directory
2025-09-17T16:03:16.304794393+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/CheckUser': Is a directory
2025-09-17T16:03:16.304806567+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/CirrusSearch': Is a directory
2025-09-17T16:03:16.304818767+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/CodeMirror': Is a directory
2025-09-17T16:03:16.304831333+02:00 stderr P rm: cannot remove '/var/www/mediawiki/w/extensions/Collection': Is a directory
2025-09-17T16:03:16.304842091+02:00 stderr F
2025-09-17T16:03:16.304842091+02:00 stderr P rm: cannot remove '/var/www/mediawiki/w/extensions/CommentStreams'
2025-09-17T16:03:16.304852900+02:00 stderr F : Is a directory
2025-09-17T16:03:16.304852900+02:00 stderr P rm:
2025-09-17T16:03:16.304863621+02:00 stderr F cannot remove '/var/www/mediawiki/w/extensions/CommonsMetadata': Is a directory
2025-09-17T16:03:16.304873865+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/ConfirmAccount': Is a directory
2025-09-17T16:03:16.304884038+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/ContactPage': Is a directory
2025-09-17T16:03:16.304894344+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/ContributionScores': Is a directory
2025-09-17T16:03:16.304906380+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/CookieWarning': Is a directory
2025-09-17T16:03:16.304918869+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/CreateRedirect': Is a directory
2025-09-17T16:03:16.304931501+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/DataTransfer': Is a directory
2025-09-17T16:03:16.304943938+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/DeleteBatch': Is a directory
2025-09-17T16:03:16.304954351+02:00 stderr P rm: cannot remove '/var/www/mediawiki/w/extensions/Description2': Is a directory
2025-09-17T16:03:16.304964827+02:00 stderr F
2025-09-17T16:03:16.304964827+02:00 stderr P rm: cannot remove '/var/www/mediawiki/w/extensions/Disambiguator'
2025-09-17T16:03:16.304975349+02:00 stderr F : Is a directory
2025-09-17T16:03:16.304975349+02:00 stderr P rm:
2025-09-17T16:03:16.305007228+02:00 stderr F cannot remove '/var/www/mediawiki/w/extensions/DismissableSiteNotice': Is a directory
2025-09-17T16:03:16.305007228+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/DisplayTitle': Is a directory
2025-09-17T16:03:16.305007228+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/EditAccount': Is a directory
2025-09-17T16:03:16.305021053+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/Editcount': Is a directory
2025-09-17T16:03:16.305031804+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/Elastica': Is a directory
2025-09-17T16:03:16.305042336+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/EmailAuthorization': Is a directory
2025-09-17T16:03:16.305052689+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/EmbedVideo': Is a directory
2025-09-17T16:03:16.305063054+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/EventLogging': Is a directory
2025-09-17T16:03:16.305075308+02:00 stderr P rm: cannot remove '/var/www/mediawiki/w/extensions/EventStreamConfig': Is a directory
2025-09-17T16:03:16.305085828+02:00 stderr F
2025-09-17T16:03:16.305085828+02:00 stderr P rm: cannot remove '/var/www/mediawiki/w/extensions/ExternalData'
2025-09-17T16:03:16.305108262+02:00 stderr F : Is a directory
2025-09-17T16:03:16.305121810+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/FlexDiagrams': Is a directory
2025-09-17T16:03:16.305132370+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/GTag': Is a directory
2025-09-17T16:03:16.305142689+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/GlobalNotice': Is a directory
2025-09-17T16:03:16.305154870+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/GoogleAnalyticsMetrics': Is a directory
2025-09-17T16:03:16.305167014+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/GoogleDocCreator': Is a directory
2025-09-17T16:03:16.305179171+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/HTMLTags': Is a directory
2025-09-17T16:03:16.305191773+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/HeaderFooter': Is a directory
2025-09-17T16:03:16.305202173+02:00 stderr P rm: cannot remove '/var/www/mediawiki/w/extensions/HeaderTabs': Is a directory
2025-09-17T16:03:16.305212532+02:00 stderr F
2025-09-17T16:03:16.305212532+02:00 stderr P rm: cannot remove '/var/www/mediawiki/w/extensions/InlineComments'
2025-09-17T16:03:16.305223041+02:00 stderr F : Is a directory
2025-09-17T16:03:16.305223041+02:00 stderr P rm:
2025-09-17T16:03:16.305233368+02:00 stderr F cannot remove '/var/www/mediawiki/w/extensions/JWTAuth': Is a directory
2025-09-17T16:03:16.305243549+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/LDAPAuthentication2': Is a directory
2025-09-17T16:03:16.305253789+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/LDAPAuthorization': Is a directory
2025-09-17T16:03:16.305264070+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/LDAPProvider': Is a directory
2025-09-17T16:03:16.305274296+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/LabeledSectionTransclusion': Is a directory
2025-09-17T16:03:16.305286376+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/Lingo': Is a directory
2025-09-17T16:03:16.305298569+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/LinkSuggest': Is a directory
2025-09-17T16:03:16.305310774+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/LinkTarget': Is a directory
2025-09-17T16:03:16.305321140+02:00 stderr P rm: cannot remove '/var/www/mediawiki/w/extensions/LockAuthor': Is a directory
2025-09-17T16:03:16.305331679+02:00 stderr F
2025-09-17T16:03:16.305331679+02:00 stderr P rm: cannot remove '/var/www/mediawiki/w/extensions/Lockdown'
2025-09-17T16:03:16.305342278+02:00 stderr F : Is a directory
2025-09-17T16:03:16.305342278+02:00 stderr P rm:
2025-09-17T16:03:16.305360036+02:00 stderr F cannot remove '/var/www/mediawiki/w/extensions/LookupUser': Is a directory
2025-09-17T16:03:16.305360036+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/Loops': Is a directory
2025-09-17T16:03:16.305374666+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/MagicNoCache': Is a directory
2025-09-17T16:03:16.305398045+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/Maps': Is a directory
2025-09-17T16:03:16.305398045+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/MassMessage': Is a directory
2025-09-17T16:03:16.305523301+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/MassMessageEmail': Is a directory
2025-09-17T16:03:16.305523301+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/MediaUploader': Is a directory
2025-09-17T16:03:16.305523301+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/Mermaid': Is a directory
2025-09-17T16:03:16.305523301+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/MintyDocs': Is a directory
2025-09-17T16:03:16.305523301+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/MobileFrontend': Is a directory
2025-09-17T16:03:16.305523301+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/MsUpload': Is a directory
2025-09-17T16:03:16.305562234+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/MyVariables': Is a directory
2025-09-17T16:03:16.305562234+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/NewUserMessage': Is a directory
2025-09-17T16:03:16.305562234+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/NumerAlpha': Is a directory
2025-09-17T16:03:16.305562234+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/OAuth': Is a directory
2025-09-17T16:03:16.305562234+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/OpenGraphMeta': Is a directory
2025-09-17T16:03:16.305562234+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/OpenIDConnect': Is a directory
2025-09-17T16:03:16.305577374+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/PageExchange': Is a directory
2025-09-17T16:03:16.305588256+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/PageForms': Is a directory
2025-09-17T16:03:16.305606296+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/PageSchemas': Is a directory
2025-09-17T16:03:16.305630051+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/PluggableAuth': Is a directory
2025-09-17T16:03:16.305652163+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/Popups': Is a directory
2025-09-17T16:03:16.305688764+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/QuickInstantCommons': Is a directory
2025-09-17T16:03:16.305735320+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/RSS': Is a directory
2025-09-17T16:03:16.305735320+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/RandomSelection': Is a directory
2025-09-17T16:03:16.305735320+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/RegexFunctions': Is a directory
2025-09-17T16:03:16.305735320+02:00 stderr P rm: cannot remove '/var/www/mediawiki/w/extensions/RegularTooltips'
2025-09-17T16:03:16.305760906+02:00 stderr F : Is a directory
2025-09-17T16:03:16.305760906+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/RelatedArticles': Is a directory
2025-09-17T16:03:16.305760906+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/RevisionSlider': Is a directory
2025-09-17T16:03:16.305781046+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/RottenLinks': Is a directory
2025-09-17T16:03:16.305781046+02:00 stderr P rm: cannot remove '/var/www/mediawiki/w/extensions/SandboxLink'
2025-09-17T16:03:16.305792682+02:00 stderr F : Is a directory
2025-09-17T16:03:16.305792682+02:00 stderr P rm: cannot remove '/var/www/mediawiki/w/extensions/SaveSpinner'
2025-09-17T16:03:16.305803283+02:00 stderr F : Is a directory
2025-09-17T16:03:16.305803283+02:00 stderr P rm:
2025-09-17T16:03:16.305835596+02:00 stderr F cannot remove '/var/www/mediawiki/w/extensions/SemanticCompoundQueries': Is a directory
2025-09-17T16:03:16.305835596+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/SemanticDependencyUpdater': Is a directory
2025-09-17T16:03:16.305835596+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/SemanticDrilldown': Is a directory
2025-09-17T16:03:16.305863735+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/SemanticExtraSpecialProperties': Is a directory
2025-09-17T16:03:16.305863735+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/SemanticMediaWiki': Is a directory
2025-09-17T16:03:16.305863735+02:00 stderr P rm:
2025-09-17T16:03:16.305886394+02:00 stderr F cannot remove '/var/www/mediawiki/w/extensions/SemanticResultFormats': Is a directory
2025-09-17T16:03:16.305886394+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/SemanticScribunto': Is a directory
2025-09-17T16:03:16.305905187+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/SemanticWatchlist': Is a directory
2025-09-17T16:03:16.305905187+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/SimpleBatchUpload': Is a directory
2025-09-17T16:03:16.305920036+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/SimpleChanges': Is a directory
2025-09-17T16:03:16.305942423+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/SimpleMathJax': Is a directory
2025-09-17T16:03:16.305942423+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/SkinPerPage': Is a directory
2025-09-17T16:03:16.305964782+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/SmiteSpam': Is a directory
2025-09-17T16:03:16.305964782+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/SocialProfile': Is a directory
2025-09-17T16:03:16.305983205+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/SubPageList': Is a directory
2025-09-17T16:03:16.305983205+02:00 stderr P rm: cannot remove '/var/www/mediawiki/w/extensions/TemplateSandbox'
2025-09-17T16:03:16.305994694+02:00 stderr F : Is a directory
2025-09-17T16:03:16.305994694+02:00 stderr P rm: cannot remove '/var/www/mediawiki/w/extensions/TemplateStyles'
2025-09-17T16:03:16.306005241+02:00 stderr F : Is a directory
2025-09-17T16:03:16.306005241+02:00 stderr P rm:
2025-09-17T16:03:16.306015641+02:00 stderr F cannot remove '/var/www/mediawiki/w/extensions/TemplateStylesExtender': Is a directory
2025-09-17T16:03:16.306035909+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/TemplateWizard': Is a directory
2025-09-17T16:03:16.306035909+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/TimedMediaHandler': Is a directory
2025-09-17T16:03:16.306059068+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/TitleIcon': Is a directory
2025-09-17T16:03:16.306059068+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/TwoColConflict': Is a directory
2025-09-17T16:03:16.306079390+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/UniversalLanguageSelector': Is a directory
2025-09-17T16:03:16.306079390+02:00 stderr P rm: cannot remove '/var/www/mediawiki/w/extensions/UploadWizard'
2025-09-17T16:03:16.306091896+02:00 stderr F : Is a directory
2025-09-17T16:03:16.306091896+02:00 stderr P rm: cannot remove '/var/www/mediawiki/w/extensions/UrlGetParameters': Is a directory
2025-09-17T16:03:16.306118213+02:00 stderr F
2025-09-17T16:03:16.306118213+02:00 stderr P rm: cannot remove '/var/www/mediawiki/w/extensions/UserFunctions': Is a directory
2025-09-17T16:03:16.306139705+02:00 stderr F
2025-09-17T16:03:16.306139705+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/UserMerge': Is a directory
2025-09-17T16:03:16.306162584+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/UserPageViewTracker': Is a directory
2025-09-17T16:03:16.306162584+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/VEForAll': Is a directory
2025-09-17T16:03:16.306191621+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/Variables': Is a directory
2025-09-17T16:03:16.306191621+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/VariablesLua': Is a directory
2025-09-17T16:03:16.306191621+02:00 stderr P rm: cannot remove '/var/www/mediawiki/w/extensions/VoteNY': Is a directory
2025-09-17T16:03:16.306205817+02:00 stderr F
2025-09-17T16:03:16.306205817+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/WSOAuth': Is a directory
2025-09-17T16:03:16.306216744+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/WatchAnalytics': Is a directory
2025-09-17T16:03:16.306231153+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/WhoIsWatching': Is a directory
2025-09-17T16:03:16.306254655+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/WhosOnline': Is a directory
2025-09-17T16:03:16.306254655+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/Widgets': Is a directory
2025-09-17T16:03:16.306276298+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/extensions/WikiSEO': Is a directory
2025-09-17T16:03:16.307738520+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/skins/CologneBlue': Is a directory
2025-09-17T16:03:16.307763692+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/skins/Modern': Is a directory
2025-09-17T16:03:16.307775046+02:00 stderr P rm: cannot remove '/var/www/mediawiki/w/skins/Pivot': Is a directory
2025-09-17T16:03:16.307785998+02:00 stderr F
2025-09-17T16:03:16.307796616+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/skins/Refreshed': Is a directory
2025-09-17T16:03:16.307806942+02:00 stderr F rm: cannot remove '/var/www/mediawiki/w/skins/chameleon': Is a directory
2025-09-17T16:03:16.308058013+02:00 stdout F Symlinking bundled extensions...
2025-09-17T16:03:16.400092225+02:00 stdout F Symlinking bundled skins...
2025-09-17T16:03:16.413062029+02:00 stdout F Symlinking user extensions and overwriting any redundant bundled extensions...
2025-09-17T16:03:16.415394355+02:00 stdout F Symlinking user skins and overwriting any redundant bundled skins...
2025-09-17T16:03:16.417941766+02:00 stderr F + echo 'Syncing files...'
2025-09-17T16:03:16.417969516+02:00 stdout F Syncing files...
2025-09-17T16:03:16.417981933+02:00 stderr F + rsync -ah --inplace --ignore-existing -og --chown=www-data:www-data --chmod=Fg=rw,Dg=rwx /mw_origin_files/ /mediawiki/
2025-09-17T16:03:16.473797845+02:00 stderr F + mkdir -p /mediawiki/l10n_cache
2025-09-17T16:03:16.476446968+02:00 stderr F + /update-docker-gateway.sh
2025-09-17T16:03:16.478328211+02:00 stderr F + . /functions.sh
2025-09-17T16:03:16.479191804+02:00 stderr F ++ get_docker_gateway
2025-09-17T16:03:16.479597569+02:00 stderr F ++ getent hosts gateway.docker.internal
2025-09-17T16:03:16.479797008+02:00 stderr F ++ awk '{ print $1 }'
2025-09-17T16:03:16.570983619+02:00 stderr F + DOCKER_GATEWAY=
2025-09-17T16:03:16.571029748+02:00 stderr F + '[' -z '' ']'
2025-09-17T16:03:16.571029748+02:00 stderr F + DOCKER_GATEWAY=172.17.0.1
2025-09-17T16:03:16.571538463+02:00 stderr F ++ get_mediawiki_variable wgServer
2025-09-17T16:03:16.571615580+02:00 stderr F ++ php /getMediawikiSettings.php --variable=wgServer --format=string
2025-09-17T16:03:16.796038409+02:00 stderr F + WG_SITE_SERVER=https://localhost
2025-09-17T16:03:16.796128844+02:00 stderr F + cp /etc/hosts /root/hosts.new
2025-09-17T16:03:16.802325266+02:00 stderr F + sed -i '/# MW_SITE_HOST/d' /root/hosts.new
2025-09-17T16:03:16.805516881+02:00 stderr F + '[' -n https://localhost ']'
2025-09-17T16:03:16.806255208+02:00 stderr F ++ echo https://localhost
2025-09-17T16:03:16.806551518+02:00 stderr F ++ sed -e 's|^[^/]*//||' -e 's|[:/].*$||'
2025-09-17T16:03:16.808556154+02:00 stderr F + MW_SITE_HOST=localhost
2025-09-17T16:03:16.808581522+02:00 stderr F + isTrue true
2025-09-17T16:03:16.808602950+02:00 stderr F + case $1 in
2025-09-17T16:03:16.808602950+02:00 stderr F + return 0
2025-09-17T16:03:16.808646179+02:00 stderr F + [[ localhost =~ ^[0-9]+.[0-9]+.[0-9]+.[0-9]+$ ]]
2025-09-17T16:03:16.808693199+02:00 stderr F + echo 'Adding MW_SITE_HOST '\''172.17.0.1 localhost'\'' to /etc/hosts'
2025-09-17T16:03:16.808709748+02:00 stdout F Adding MW_SITE_HOST '172.17.0.1 localhost' to /etc/hosts
2025-09-17T16:03:16.808720656+02:00 stderr F + echo '172.17.0.1 localhost # MW_SITE_HOST'
2025-09-17T16:03:16.808837494+02:00 stderr F + cp -f /root/hosts.new /etc/hosts
2025-09-17T16:03:16.811309405+02:00 stderr F + sed -i s/DOCKER_GATEWAY/172.17.0.1/ /etc/msmtprc
2025-09-17T16:03:16.813913889+02:00 stdout F Checking permissions of Apache log dir /var/log/apache2...
2025-09-17T16:03:16.813934240+02:00 stderr F + echo 'Checking permissions of Apache log dir /var/log/apache2...'
2025-09-17T16:03:16.813980173+02:00 stderr F + mountpoint -q -- /var/log/apache2/
2025-09-17T16:03:16.817051763+02:00 stderr F + mkdir -p /mediawiki/log/httpd
2025-09-17T16:03:16.819232368+02:00 stderr F + rsync -avh --ignore-existing /var/log/apache2/ /mediawiki/log/httpd/
2025-09-17T16:03:16.826163038+02:00 stdout F sending incremental file list
2025-09-17T16:03:16.828106532+02:00 stdout F ./
2025-09-17T16:03:16.828146982+02:00 stdout F access.log
2025-09-17T16:03:16.828231958+02:00 stdout F error.log
2025-09-17T16:03:16.828287679+02:00 stdout F other_vhosts_access.log
2025-09-17T16:03:16.870510392+02:00 stdout F
2025-09-17T16:03:16.870510392+02:00 stdout F sent 233 bytes  received 76 bytes  618.00 bytes/sec
2025-09-17T16:03:16.870510392+02:00 stdout F total size is 0  speedup is 0.00
2025-09-17T16:03:16.871192381+02:00 stderr F + mv /var/log/apache2 /var/log/apache2_old
2025-09-17T16:03:16.875767092+02:00 stderr F + ln -s /mediawiki/log/httpd /var/log/apache2
2025-09-17T16:03:16.877132466+02:00 stdout F Checking permissions of PHP-FPM log dir ...
2025-09-17T16:03:16.877154515+02:00 stderr F + echo 'Checking permissions of PHP-FPM log dir ...'
2025-09-17T16:03:16.877167826+02:00 stderr F + mountpoint -q -- /
2025-09-17T16:03:16.879577856+02:00 stderr F + chgrp -R www-data ''
2025-09-17T16:03:16.881229491+02:00 stderr F chgrp: cannot access '': No such file or directory
2025-09-17T16:03:16.881411632+02:00 stderr F + chmod -R g=rwX ''
2025-09-17T16:03:16.882889027+02:00 stderr F chmod: cannot access '': No such file or directory
2025-09-17T16:03:16.883173601+02:00 stderr F + check_mount_points
2025-09-17T16:03:16.883173601+02:00 stderr F + '[' '!' -d /var/www/mediawiki/w/user-extensions ']'
2025-09-17T16:03:16.883247078+02:00 stderr F + '[' '!' -d /var/www/mediawiki/w/user-skins ']'
2025-09-17T16:03:16.883247078+02:00 stderr F + sleep 1
2025-09-17T16:03:17.884877158+02:00 stderr F + cd /var/www/mediawiki/w
2025-09-17T16:03:17.885254577+02:00 stdout F Checking for LocalSettings...
2025-09-17T16:03:17.885277956+02:00 stderr F + echo 'Checking for LocalSettings...'
2025-09-17T16:03:17.885277956+02:00 stderr F + /update-images-permissions.sh
2025-09-17T16:03:17.885323314+02:00 stderr F + '[' -e /mediawiki/config/LocalSettings.php ']'
2025-09-17T16:03:17.885323314+02:00 stderr F + . /run-maintenance-scripts.sh
2025-09-17T16:03:17.885556466+02:00 stderr F ++ sleep 0.02
2025-09-17T16:03:17.898956852+02:00 stdout F
2025-09-17T16:03:17.898956852+02:00 stdout F
2025-09-17T16:03:17.898956852+02:00 stdout F ===== update-images-permissions.sh =====
2025-09-17T16:03:17.898956852+02:00 stdout F
2025-09-17T16:03:17.898956852+02:00 stdout F
2025-09-17T16:03:17.898985246+02:00 stderr F + . /functions.sh
2025-09-17T16:03:17.899239825+02:00 stdout F Checking permissions of images in MediaWiki volume dir /mediawiki/images...
2025-09-17T16:03:17.899254091+02:00 stderr F + echo 'Checking permissions of images in MediaWiki volume dir /mediawiki/images...'
2025-09-17T16:03:17.899254091+02:00 stderr F + make_dir_writable /mediawiki/images
2025-09-17T16:03:17.899341199+02:00 stderr F + find /mediawiki/images '(' -type f -o -type d ')' -not '(' '(' -user www-data -perm -u=w ')' -o '(' -group www-data -perm -g=w ')' -o '(' -perm -o=w ')' ')' -exec chgrp www-data '{}' ';' -exec chmod g=rwX '{}' ';'
2025-09-17T16:03:17.907259218+02:00 stdout F
2025-09-17T16:03:17.907259218+02:00 stdout F
2025-09-17T16:03:17.907259218+02:00 stdout F ===== run-maintenance-scripts.sh =====
2025-09-17T16:03:17.907259218+02:00 stdout F
2025-09-17T16:03:17.907259218+02:00 stdout F
2025-09-17T16:03:17.907299183+02:00 stderr F ++ printf '\n\n===== run-maintenance-scripts.sh =====\n\n\n'
2025-09-17T16:03:17.907299183+02:00 stderr F ++ set -x
2025-09-17T16:03:17.907299183+02:00 stderr F ++ . /functions.sh
2025-09-17T16:03:17.908005976+02:00 stderr F +++ get_mediawiki_db_var wgDBtype
2025-09-17T16:03:17.908068094+02:00 stderr F +++ case $1 in
2025-09-17T16:03:17.908068094+02:00 stderr F +++ I=type
2025-09-17T16:03:17.908565058+02:00 stderr F ++++ php /getMediawikiSettings.php --variable=wgDBservers --format=string
2025-09-17T16:03:18.111181922+02:00 stderr F +++ VALUE=
2025-09-17T16:03:18.111257129+02:00 stderr F +++ '[' -z '' ']'
2025-09-17T16:03:18.111780321+02:00 stderr F ++++ get_mediawiki_variable wgDBtype
2025-09-17T16:03:18.111817368+02:00 stderr F ++++ php /getMediawikiSettings.php --variable=wgDBtype --format=string
2025-09-17T16:03:18.327739305+02:00 stderr F +++ VALUE=mysql
2025-09-17T16:03:18.327739305+02:00 stderr F +++ echo mysql
2025-09-17T16:03:18.328186982+02:00 stderr F ++ WG_DB_TYPE=mysql
2025-09-17T16:03:18.328727949+02:00 stderr F +++ get_mediawiki_db_var wgDBserver
2025-09-17T16:03:18.328800873+02:00 stderr F +++ case $1 in
2025-09-17T16:03:18.328800873+02:00 stderr F +++ I=host
2025-09-17T16:03:18.329309324+02:00 stderr F ++++ php /getMediawikiSettings.php --variable=wgDBservers --format=string
2025-09-17T16:03:18.543985441+02:00 stderr F +++ VALUE=
2025-09-17T16:03:18.543985441+02:00 stderr F +++ '[' -z '' ']'
2025-09-17T16:03:18.544591507+02:00 stderr F ++++ get_mediawiki_variable wgDBserver
2025-09-17T16:03:18.544625826+02:00 stderr F ++++ php /getMediawikiSettings.php --variable=wgDBserver --format=string
2025-09-17T16:03:18.768993828+02:00 stderr F +++ VALUE=db-instance
2025-09-17T16:03:18.768993828+02:00 stderr F +++ echo db-instance
2025-09-17T16:03:18.769342347+02:00 stderr F ++ WG_DB_SERVER=db-instance
2025-09-17T16:03:18.770216904+02:00 stderr F +++ get_mediawiki_db_var wgDBname
2025-09-17T16:03:18.770246371+02:00 stderr F +++ case $1 in
2025-09-17T16:03:18.770246371+02:00 stderr F +++ I=dbname
2025-09-17T16:03:18.770793142+02:00 stderr F ++++ php /getMediawikiSettings.php --variable=wgDBservers --format=string
2025-09-17T16:03:18.978044213+02:00 stderr F +++ VALUE=
2025-09-17T16:03:18.978114925+02:00 stderr F +++ '[' -z '' ']'
2025-09-17T16:03:18.978721230+02:00 stderr F ++++ get_mediawiki_variable wgDBname
2025-09-17T16:03:18.978750322+02:00 stderr F ++++ php /getMediawikiSettings.php --variable=wgDBname --format=string
2025-09-17T16:03:19.186647894+02:00 stderr F +++ VALUE=mediawiki
2025-09-17T16:03:19.186647894+02:00 stderr F +++ echo mediawiki
2025-09-17T16:03:19.186994342+02:00 stderr F ++ WG_DB_NAME=mediawiki
2025-09-17T16:03:19.187661028+02:00 stderr F +++ get_mediawiki_db_var wgDBuser
2025-09-17T16:03:19.187766783+02:00 stderr F +++ case $1 in
2025-09-17T16:03:19.187766783+02:00 stderr F +++ I=user
2025-09-17T16:03:19.188281514+02:00 stderr F ++++ php /getMediawikiSettings.php --variable=wgDBservers --format=string
2025-09-17T16:03:19.388532587+02:00 stderr F +++ VALUE=
2025-09-17T16:03:19.388587721+02:00 stderr F +++ '[' -z '' ']'
2025-09-17T16:03:19.389393529+02:00 stderr F ++++ get_mediawiki_variable wgDBuser
2025-09-17T16:03:19.389542322+02:00 stderr F ++++ php /getMediawikiSettings.php --variable=wgDBuser --format=string
2025-09-17T16:03:19.634751501+02:00 stderr F +++ VALUE=mediawiki
2025-09-17T16:03:19.634751501+02:00 stderr F +++ echo mediawiki
2025-09-17T16:03:19.635245142+02:00 stderr F ++ WG_DB_USER=mediawiki
2025-09-17T16:03:19.635748999+02:00 stderr F +++ get_mediawiki_db_var wgDBpassword
2025-09-17T16:03:19.635797100+02:00 stderr F +++ case $1 in
2025-09-17T16:03:19.635820851+02:00 stderr F +++ I=password
2025-09-17T16:03:19.636302682+02:00 stderr F ++++ php /getMediawikiSettings.php --variable=wgDBservers --format=string
2025-09-17T16:03:19.835898300+02:00 stderr F +++ VALUE=
2025-09-17T16:03:19.835970820+02:00 stderr F +++ '[' -z '' ']'
2025-09-17T16:03:19.836631983+02:00 stderr F ++++ get_mediawiki_variable wgDBpassword
2025-09-17T16:03:19.836673197+02:00 stderr F ++++ php /getMediawikiSettings.php --variable=wgDBpassword --format=string
2025-09-17T16:03:20.053293652+02:00 stderr F +++ VALUE='MediaWiki..!'
2025-09-17T16:03:20.053349904+02:00 stderr F +++ echo 'MediaWiki..!'
2025-09-17T16:03:20.053652376+02:00 stderr F ++ WG_DB_PASSWORD='MediaWiki..!'
2025-09-17T16:03:20.054253360+02:00 stderr F +++ get_mediawiki_variable wgSQLiteDataDir
2025-09-17T16:03:20.054299903+02:00 stderr F +++ php /getMediawikiSettings.php --variable=wgSQLiteDataDir --format=string
2025-09-17T16:03:20.254080204+02:00 stderr F ++ WG_SQLITE_DATA_DIR=
2025-09-17T16:03:20.254625334+02:00 stderr F +++ get_mediawiki_variable wgSearchType
2025-09-17T16:03:20.254707204+02:00 stderr F +++ php /getMediawikiSettings.php --variable=wgSearchType --format=string
2025-09-17T16:03:20.462188277+02:00 stderr F ++ WG_SEARCH_TYPE=
2025-09-17T16:03:20.462800769+02:00 stderr F +++ php /getMediawikiSettings.php --versions --format=md5
2025-09-17T16:03:20.653383472+02:00 stderr F ++ VERSION_HASH=f4e9c770e191e6df7b8a1f0977fc47ab
2025-09-17T16:03:20.653900416+02:00 stdout F Checking for LocalSettings...
2025-09-17T16:03:20.653927603+02:00 stderr F ++ echo 'Checking for LocalSettings...'
2025-09-17T16:03:20.654020774+02:00 stderr F ++ '[' -e /mediawiki/config/LocalSettings.php ']'
2025-09-17T16:03:20.654058020+02:00 stderr F ++ isTrue true
2025-09-17T16:03:20.654071281+02:00 stderr F ++ case $1 in
2025-09-17T16:03:20.654105971+02:00 stderr F ++ return 0
2025-09-17T16:03:20.654123181+02:00 stderr F ++ waitdatabase
2025-09-17T16:03:20.654161424+02:00 stderr F ++ '[' -n '' ']'
2025-09-17T16:03:20.654184673+02:00 stderr F ++ '[' mysql = sqlite ']'
2025-09-17T16:03:20.654184673+02:00 stderr F ++ '[' mysql '!=' mysql ']'
2025-09-17T16:03:20.654184673+02:00 stderr F ++ isFalse ''
2025-09-17T16:03:20.654208832+02:00 stderr F ++ case $1 in
2025-09-17T16:03:20.654208832+02:00 stderr F ++ return 0
2025-09-17T16:03:20.654221442+02:00 stderr F ++ echo 'Waiting for database to start'
2025-09-17T16:03:20.654231919+02:00 stderr F Waiting for database to start
2025-09-17T16:03:20.654242292+02:00 stderr F ++ /wait-for-it.sh -t 86400 db-instance
2025-09-17T16:03:20.658141803+02:00 stderr F Unknown argument: db-instance
2025-09-17T16:03:20.659548592+02:00 stderr F Usage:
2025-09-17T16:03:20.659548592+02:00 stderr F     wait-for-it.sh host:port [-s] [-t timeout] [-- command args]
2025-09-17T16:03:20.659548592+02:00 stderr F     -h HOST | --host=HOST       Host or IP under test
2025-09-17T16:03:20.659548592+02:00 stderr F     -p PORT | --port=PORT       TCP port under test
2025-09-17T16:03:20.659548592+02:00 stderr F                                 Alternatively, you specify the host and port as host:port
2025-09-17T16:03:20.659548592+02:00 stderr F     -s | --strict               Only execute subcommand if the test succeeds
2025-09-17T16:03:20.659548592+02:00 stderr F     -q | --quiet                Don't output any status messages
2025-09-17T16:03:20.659548592+02:00 stderr F     -t TIMEOUT | --timeout=TIMEOUT
2025-09-17T16:03:20.659548592+02:00 stderr F                                 Timeout in seconds, zero for no timeout
2025-09-17T16:03:20.659548592+02:00 stderr F     -- COMMAND ARGS             Execute command with args after the test finishes
2025-09-17T16:03:20.660056880+02:00 stderr F ++ mysql=(mysql -h "$WG_DB_SERVER" -u"$WG_DB_USER" -p"$WG_DB_PASSWORD")
2025-09-17T16:03:20.660056880+02:00 stderr F ++ for i in {60..0}
2025-09-17T16:03:20.660514085+02:00 stderr F ++ echo 'SELECT 1'
2025-09-17T16:03:20.660800090+02:00 stderr F ++ mysql -h db-instance -umediawiki '-pMediaWiki..!'
2025-09-17T16:03:20.726777327+02:00 stderr F ++ db_started=1
2025-09-17T16:03:20.726777327+02:00 stderr F ++ break
2025-09-17T16:03:20.726831944+02:00 stderr F ++ '[' 60 = 0 ']'
2025-09-17T16:03:20.726831944+02:00 stderr F ++ echo 'Successfully connected to the database.'
2025-09-17T16:03:20.726831944+02:00 stderr F Successfully connected to the database.
2025-09-17T16:03:20.726831944+02:00 stderr F ++ return 0
2025-09-17T16:03:20.726882015+02:00 stderr F ++ rm /var/www/mediawiki/.maintenance
2025-09-17T16:03:20.728167012+02:00 stderr F rm: cannot remove '/var/www/mediawiki/.maintenance': No such file or directory
2025-09-17T16:03:20.728335663+02:00 stderr F ++ run_autoupdate
2025-09-17T16:03:20.728358540+02:00 stderr F ++ echo 'Check for the need to run maintenance scripts'
2025-09-17T16:03:20.728358540+02:00 stderr F Check for the need to run maintenance scripts
2025-09-17T16:03:20.728406186+02:00 stderr F ++ run_maintenance_script_if_needed maintenance_update REL1_43-1.43.3-0-f4e9c770e191e6df7b8a1f0977fc47ab 'maintenance/update.php --quick'
2025-09-17T16:03:20.728440079+02:00 stderr F ++ '[' -f /mediawiki/maintenance_update.info ']'
2025-09-17T16:03:20.728499063+02:00 stderr F ++ update_info=
2025-09-17T16:03:20.728514085+02:00 stderr F ++ [[ '' != \R\E\L\1\_\4\3\-\1\.\4\3\.\3\-\0\-\f\4\e\9\c\7\7\0\e\1\9\1\e\6\d\f\7\b\8\a\1\f\0\9\7\7\f\c\4\7\a\b ]]
2025-09-17T16:03:20.728514085+02:00 stderr F ++ [[ -n REL1_43-1.43.3-0-f4e9c770e191e6df7b8a1f0977fc47ab ]]
2025-09-17T16:03:20.728525001+02:00 stderr F ++ waitdatabase
2025-09-17T16:03:20.728576594+02:00 stderr F ++ '[' -n 1 ']'
2025-09-17T16:03:20.728576594+02:00 stderr F ++ return 0
2025-09-17T16:03:20.728591026+02:00 stderr F ++ i=3
2025-09-17T16:03:20.728603659+02:00 stderr F ++ '[' -n 'maintenance/update.php --quick' ']'
2025-09-17T16:03:20.729450451+02:00 stderr F +++ echo 'maintenance/update.php --quick'
2025-09-17T16:03:20.729693214+02:00 stderr F +++ awk '{print $1}'
2025-09-17T16:03:20.731217629+02:00 stderr F ++ '[' '!' -f maintenance/update.php ']'
2025-09-17T16:03:20.731250045+02:00 stderr F ++ echo 'Run maintenance script: maintenance/update.php --quick'
2025-09-17T16:03:20.731250045+02:00 stderr F Run maintenance script: maintenance/update.php --quick
2025-09-17T16:03:20.731271806+02:00 stderr F ++ runuser -c 'php maintenance/update.php --quick' -s /bin/bash www-data
2025-09-17T16:03:20.949677433+02:00 stdout F MediaWiki 1.43.3 Updater
2025-09-17T16:03:20.949677433+02:00 stdout F
2025-09-17T16:03:20.954963992+02:00 stdout F Your composer.lock file is up to date with current dependencies!
2025-09-17T16:03:20.976233817+02:00 stdout F Going to run database updates for mediawiki
2025-09-17T16:03:20.976324375+02:00 stdout F Depending on the size of your database this may take a while!
2025-09-17T16:03:20.979031640+02:00 stderr F Can not upgrade from versions older than 1.35, please upgrade to that version or later first.
2025-09-17T16:03:20.988474504+02:00 stderr F ++ echo 'An error occurred when the maintenance script maintenance/update.php --quick was running'
2025-09-17T16:03:20.988474504+02:00 stderr F An error occurred when the maintenance script maintenance/update.php --quick was running
2025-09-17T16:03:20.988530277+02:00 stderr F ++ return 0
2025-09-17T16:03:20.988530277+02:00 stderr F ++ echo 'Auto-update completed'
2025-09-17T16:03:20.988530277+02:00 stderr F Auto-update completed
2025-09-17T16:03:20.988560090+02:00 stderr F ++ run_maintenance_scripts
2025-09-17T16:03:20.989183622+02:00 stderr F +++ find /maintenance-scripts/ -maxdepth 1 -mindepth 1 -type f -name '*.sh'
2025-09-17T16:03:20.991244611+02:00 stderr F ++ for maintenance_script in $(find /maintenance-scripts/ -maxdepth 1 -mindepth 1 -type f -name "*.sh")
2025-09-17T16:03:20.991826288+02:00 stderr F +++ basename /maintenance-scripts/monitor-directories.sh
2025-09-17T16:03:20.993066483+02:00 stderr F ++ script_name=monitor-directories.sh
2025-09-17T16:03:20.993066483+02:00 stderr F ++ [[ monitor-directories.sh == mw* ]]
2025-09-17T16:03:20.993107913+02:00 stdout F Running monitor-directories.sh with user www-data...
2025-09-17T16:03:20.993119970+02:00 stderr F ++ echo 'Running monitor-directories.sh with user www-data...'
2025-09-17T16:03:20.993374743+02:00 stderr F ++ for maintenance_script in $(find /maintenance-scripts/ -maxdepth 1 -mindepth 1 -type f -name "*.sh")
2025-09-17T16:03:20.993529389+02:00 stderr F ++ nice -n 20 runuser -c /maintenance-scripts/monitor-directories.sh -s /bin/bash www-data
2025-09-17T16:03:20.994346663+02:00 stderr F +++ basename /maintenance-scripts/mw_job_runner.sh
2025-09-17T16:03:20.995445598+02:00 stderr F ++ script_name=mw_job_runner.sh
2025-09-17T16:03:20.995445598+02:00 stderr F ++ [[ mw_job_runner.sh == mw* ]]
2025-09-17T16:03:20.995738647+02:00 stderr F ++ for maintenance_script in $(find /maintenance-scripts/ -maxdepth 1 -mindepth 1 -type f -name "*.sh")
2025-09-17T16:03:20.995908511+02:00 stderr F ++ run_mw_script mw_job_runner.sh
2025-09-17T16:03:20.996074331+02:00 stderr F ++ sleep 3
2025-09-17T16:03:20.997449676+02:00 stderr F +++ basename /maintenance-scripts/mw_sitemap_generator.sh
2025-09-17T16:03:20.998654034+02:00 stderr F ++ script_name=mw_sitemap_generator.sh
2025-09-17T16:03:20.998699319+02:00 stderr F ++ [[ mw_sitemap_generator.sh == mw* ]]
2025-09-17T16:03:20.999138936+02:00 stderr F ++ for maintenance_script in $(find /maintenance-scripts/ -maxdepth 1 -mindepth 1 -type f -name "*.sh")
2025-09-17T16:03:20.999255343+02:00 stderr F ++ run_mw_script mw_sitemap_generator.sh
2025-09-17T16:03:20.999591577+02:00 stderr F ++ sleep 3
2025-09-17T16:03:21.000229787+02:00 stderr F +++ basename /maintenance-scripts/mw_transcoder.sh
2025-09-17T16:03:21.001334287+02:00 stderr F ++ script_name=mw_transcoder.sh
2025-09-17T16:03:21.001440881+02:00 stderr F ++ [[ mw_transcoder.sh == mw* ]]
2025-09-17T16:03:21.001847344+02:00 stderr F ++ run_mw_script mw_transcoder.sh
2025-09-17T16:03:21.001909751+02:00 stderr F ++ sleep 4
2025-09-17T16:03:21.002004670+02:00 stderr F ++ sleep 3
2025-09-17T16:03:21.006700366+02:00 stderr F + userexts=/var/www/mediawiki/w/user-extensions
2025-09-17T16:03:21.006700366+02:00 stderr F + extensions=/var/www/mediawiki/w/extensions
2025-09-17T16:03:21.006732132+02:00 stderr F + canexts=/var/www/mediawiki/w/canasta-extensions
2025-09-17T16:03:21.006732132+02:00 stderr F + userskins=/var/www/mediawiki/w/user-skins
2025-09-17T16:03:21.006744126+02:00 stderr F + skins=/var/www/mediawiki/w/skins
2025-09-17T16:03:21.006754896+02:00 stderr F + canskins=/var/www/mediawiki/w/canasta-skins
2025-09-17T16:03:21.007348084+02:00 stderr F + inotifywait -m -e create,moved_to,delete,moved_from --format %e:%f -- /var/www/mediawiki/w/user-extensions
2025-09-17T16:03:21.007524337+02:00 stderr F + IFS=:
2025-09-17T16:03:21.007524337+02:00 stderr F + read -r event file
2025-09-17T16:03:21.008980399+02:00 stderr F Setting up watches.
2025-09-17T16:03:21.008980399+02:00 stderr F Watches established.
2025-09-17T16:03:23.997646781+02:00 stderr F ++ local script_name=mw_job_runner.sh
2025-09-17T16:03:23.997714455+02:00 stderr F ++ script_name_no_ext=mw_job_runner
2025-09-17T16:03:23.998726855+02:00 stderr F +++ basename mw_job_runner
2025-09-17T16:03:23.998895583+02:00 stderr F +++ tr '[:lower:]' '[:upper:]'
2025-09-17T16:03:24.000753894+02:00 stderr F ++ script_name_upper=MW_JOB_RUNNER
2025-09-17T16:03:24.000784047+02:00 stderr F ++ local MW_ENABLE_VAR=MW_ENABLE_JOB_RUNNER
2025-09-17T16:03:24.000854291+02:00 stderr F ++ isTrue true
2025-09-17T16:03:24.000870246+02:00 stderr F ++ case $1 in
2025-09-17T16:03:24.000880740+02:00 stderr F ++ return 0
2025-09-17T16:03:24.000891170+02:00 stderr F ++ local script_name=mw_sitemap_generator.sh
2025-09-17T16:03:24.000945127+02:00 stderr F ++ script_name_no_ext=mw_sitemap_generator
2025-09-17T16:03:24.000945127+02:00 stderr F ++ echo 'Running mw_job_runner.sh with user www-data...'
2025-09-17T16:03:24.000961305+02:00 stdout F Running mw_job_runner.sh with user www-data...
2025-09-17T16:03:24.001017476+02:00 stderr F ++ nice -n 20 runuser -c /maintenance-scripts/mw_job_runner.sh -s /bin/bash www-data
2025-09-17T16:03:24.001784683+02:00 stderr F +++ basename mw_sitemap_generator
2025-09-17T16:03:24.002069276+02:00 stderr F +++ tr '[:lower:]' '[:upper:]'
2025-09-17T16:03:24.003342578+02:00 stderr F ++ local script_name=mw_transcoder.sh
2025-09-17T16:03:24.003399063+02:00 stderr F ++ script_name_no_ext=mw_transcoder
2025-09-17T16:03:24.003399063+02:00 stderr F ++ script_name_upper=MW_SITEMAP_GENERATOR
2025-09-17T16:03:24.003506961+02:00 stderr F ++ local MW_ENABLE_VAR=MW_ENABLE_SITEMAP_GENERATOR
2025-09-17T16:03:24.003542303+02:00 stderr F ++ isTrue false
2025-09-17T16:03:24.003542303+02:00 stderr F ++ case $1 in
2025-09-17T16:03:24.003566129+02:00 stderr F ++ return 1
2025-09-17T16:03:24.003588011+02:00 stderr F ++ echo 'mw_sitemap_generator.sh is disabled.'
2025-09-17T16:03:24.003608031+02:00 stderr F mw_sitemap_generator.sh is disabled.
2025-09-17T16:03:24.004689683+02:00 stderr F +++ basename mw_transcoder
2025-09-17T16:03:24.004934102+02:00 stderr F +++ tr '[:lower:]' '[:upper:]'
2025-09-17T16:03:24.006217644+02:00 stderr F ++ script_name_upper=MW_TRANSCODER
2025-09-17T16:03:24.006258282+02:00 stderr F ++ local MW_ENABLE_VAR=MW_ENABLE_TRANSCODER
2025-09-17T16:03:24.006312934+02:00 stderr F ++ isTrue true
2025-09-17T16:03:24.006337668+02:00 stderr F ++ case $1 in
2025-09-17T16:03:24.006357668+02:00 stderr F ++ return 0
2025-09-17T16:03:24.006453507+02:00 stderr F ++ echo 'Running mw_transcoder.sh with user www-data...'
2025-09-17T16:03:24.006488888+02:00 stdout F Running mw_transcoder.sh with user www-data...
2025-09-17T16:03:24.006558491+02:00 stderr F ++ nice -n 20 runuser -c /maintenance-scripts/mw_transcoder.sh -s /bin/bash www-data
2025-09-17T16:03:24.011891797+02:00 stdout F Starting job runner (in 10 seconds)...
2025-09-17T16:03:24.016589297+02:00 stdout F Starting transcoder (in 180 seconds)...
2025-09-17T16:03:25.003518987+02:00 stdout F
2025-09-17T16:03:25.003518987+02:00 stdout F
2025-09-17T16:03:25.003518987+02:00 stdout F >>>>> run-maintenance-scripts.sh <<<<<
2025-09-17T16:03:25.003518987+02:00 stdout F
2025-09-17T16:03:25.003518987+02:00 stdout F
2025-09-17T16:03:25.003574530+02:00 stderr F ++ printf '\n\n>>>>> run-maintenance-scripts.sh <<<<<\n\n\n'
2025-09-17T16:03:25.003574530+02:00 stderr F + run_autoupdate
2025-09-17T16:03:25.003589917+02:00 stderr F + echo 'Check for the need to run maintenance scripts'
2025-09-17T16:03:25.003600834+02:00 stderr F Check for the need to run maintenance scripts
2025-09-17T16:03:25.003642995+02:00 stderr F + run_maintenance_script_if_needed maintenance_update REL1_43-1.43.3-0-f4e9c770e191e6df7b8a1f0977fc47ab 'maintenance/update.php --quick'
2025-09-17T16:03:25.003699333+02:00 stderr F + '[' -f /mediawiki/maintenance_update.info ']'
2025-09-17T16:03:25.003715318+02:00 stderr F + update_info=
2025-09-17T16:03:25.003726088+02:00 stderr F + [[ '' != \R\E\L\1\_\4\3\-\1\.\4\3\.\3\-\0\-\f\4\e\9\c\7\7\0\e\1\9\1\e\6\d\f\7\b\8\a\1\f\0\9\7\7\f\c\4\7\a\b ]]
2025-09-17T16:03:25.003726088+02:00 stderr F + [[ -n REL1_43-1.43.3-0-f4e9c770e191e6df7b8a1f0977fc47ab ]]
2025-09-17T16:03:25.003738660+02:00 stderr F + waitdatabase
2025-09-17T16:03:25.003808089+02:00 stderr F + '[' -n 1 ']'
2025-09-17T16:03:25.003808089+02:00 stderr F + return 0
2025-09-17T16:03:25.003823646+02:00 stderr F + i=3
2025-09-17T16:03:25.003834319+02:00 stderr F + '[' -n 'maintenance/update.php --quick' ']'
2025-09-17T16:03:25.005261677+02:00 stderr F ++ echo 'maintenance/update.php --quick'
2025-09-17T16:03:25.005488459+02:00 stderr F ++ awk '{print $1}'
2025-09-17T16:03:25.007985255+02:00 stderr F + '[' '!' -f maintenance/update.php ']'
2025-09-17T16:03:25.007985255+02:00 stderr F + echo 'Run maintenance script: maintenance/update.php --quick'
2025-09-17T16:03:25.007985255+02:00 stderr F Run maintenance script: maintenance/update.php --quick
2025-09-17T16:03:25.008022293+02:00 stderr F + runuser -c 'php maintenance/update.php --quick' -s /bin/bash www-data
2025-09-17T16:03:25.227610139+02:00 stdout F MediaWiki 1.43.3 Updater
2025-09-17T16:03:25.227610139+02:00 stdout F
2025-09-17T16:03:25.233986042+02:00 stdout F Your composer.lock file is up to date with current dependencies!
2025-09-17T16:03:25.255631209+02:00 stdout F Going to run database updates for mediawiki
2025-09-17T16:03:25.255631209+02:00 stdout F Depending on the size of your database this may take a while!
2025-09-17T16:03:25.258335361+02:00 stderr F Can not upgrade from versions older than 1.35, please upgrade to that version or later first.
2025-09-17T16:03:25.268940994+02:00 stderr F + echo 'An error occurred when the maintenance script maintenance/update.php --quick was running'
2025-09-17T16:03:25.268940994+02:00 stderr F An error occurred when the maintenance script maintenance/update.php --quick was running
2025-09-17T16:03:25.268940994+02:00 stderr F + return 0
2025-09-17T16:03:25.268985306+02:00 stderr F + echo 'Auto-update completed'
2025-09-17T16:03:25.268997843+02:00 stderr F Auto-update completed
2025-09-17T16:03:25.269051721+02:00 stderr F + '[' -e /mediawiki/config/wikis.yaml ']'
2025-09-17T16:03:25.269148921+02:00 stdout F Starting services...
2025-09-17T16:03:25.269162047+02:00 stderr F + echo 'Starting services...'
2025-09-17T16:03:25.269162047+02:00 stderr F + touch /var/www/mediawiki/.maintenance
2025-09-17T16:03:25.275871290+02:00 stderr F + /run-maintenance-scripts.sh
2025-09-17T16:03:25.275956985+02:00 stderr F + echo 'Checking permissions of Mediawiki log dir /var/log/mediawiki...'
2025-09-17T16:03:25.275974971+02:00 stdout F Checking permissions of Mediawiki log dir /var/log/mediawiki...
2025-09-17T16:03:25.276036232+02:00 stderr F + mountpoint -q -- /var/log/mediawiki
2025-09-17T16:03:25.278512866+02:00 stderr F + mkdir -p /mediawiki/log/mediawiki
2025-09-17T16:03:25.280276126+02:00 stderr F + rsync -avh --ignore-existing /var/log/mediawiki/ /mediawiki/log/mediawiki/
2025-09-17T16:03:25.286472433+02:00 stdout F sending incremental file list
2025-09-17T16:03:25.287371869+02:00 stdout F ./
2025-09-17T16:03:25.299111497+02:00 stdout F
2025-09-17T16:03:25.299111497+02:00 stdout F
2025-09-17T16:03:25.299111497+02:00 stdout F ===== run-maintenance-scripts.sh =====
2025-09-17T16:03:25.299111497+02:00 stdout F
2025-09-17T16:03:25.299111497+02:00 stdout F
2025-09-17T16:03:25.299177032+02:00 stderr F + . /functions.sh
2025-09-17T16:03:25.299949271+02:00 stderr F ++ get_mediawiki_db_var wgDBtype
2025-09-17T16:03:25.300021920+02:00 stderr F ++ case $1 in
2025-09-17T16:03:25.300021920+02:00 stderr F ++ I=type
2025-09-17T16:03:25.300533850+02:00 stderr F +++ php /getMediawikiSettings.php --variable=wgDBservers --format=string
2025-09-17T16:03:25.328145218+02:00 stdout F
2025-09-17T16:03:25.328145218+02:00 stdout F sent 53 bytes  received 19 bytes  144.00 bytes/sec
2025-09-17T16:03:25.328145218+02:00 stdout F total size is 0  speedup is 0.00
2025-09-17T16:03:25.328927960+02:00 stderr F + mv /var/log/mediawiki /var/log/mediawiki_old
2025-09-17T16:03:25.331687406+02:00 stderr F + ln -s /mediawiki/log/mediawiki /var/log/mediawiki
2025-09-17T16:03:25.333036443+02:00 stderr F + chmod -R o=rwX /mediawiki/log/mediawiki
2025-09-17T16:03:25.334668697+02:00 stderr F + echo 'Checking permissions of MediaWiki volume dir /mediawiki except /mediawiki/images...'
2025-09-17T16:03:25.334743957+02:00 stdout F Checking permissions of MediaWiki volume dir /mediawiki except /mediawiki/images...
2025-09-17T16:03:25.334857748+02:00 stderr F + make_dir_writable /mediawiki -not '(' -path /mediawiki/images -prune ')'
2025-09-17T16:03:25.334952647+02:00 stderr F + find /mediawiki -not '(' -path /mediawiki/images -prune ')' '(' -type f -o -type d ')' -not '(' '(' -user www-data -perm -u=w ')' -o '(' -group www-data -perm -g=w ')' -o '(' -perm -o=w ')' ')' -exec chgrp www-data '{}' ';' -exec chmod g=rwX '{}' ';'
2025-09-17T16:03:25.338770598+02:00 stderr F chgrp: changing group of '/mediawiki/config/settings/..2025_09_17_14_03_14.1294365297': Read-only file system
2025-09-17T16:03:25.340179971+02:00 stderr F chgrp: changing group of '/mediawiki/config/settings/..2025_09_17_14_03_14.1294365297/composer.local.json': Read-only file system
2025-09-17T16:03:25.341558143+02:00 stderr F chgrp: changing group of '/mediawiki/config/..2025_09_17_14_03_14.3144961039': Read-only file system
2025-09-17T16:03:25.342979231+02:00 stderr F chgrp: changing group of '/mediawiki/config/..2025_09_17_14_03_14.3144961039/CanastaFooterIcon.php': Read-only file system
2025-09-17T16:03:25.344492663+02:00 stderr F chgrp: changing group of '/mediawiki/config/..2025_09_17_14_03_14.3144961039/LocalSettings.php': Read-only file system
2025-09-17T16:03:25.345878207+02:00 stderr F chgrp: changing group of '/mediawiki/config/..2025_09_17_14_03_14.3144961039/Vector.php': Read-only file system
2025-09-17T16:03:25.363768213+02:00 stderr F + echo 'root: '
2025-09-17T16:03:25.363768213+02:00 stderr F + /run-php-fpm.sh
2025-09-17T16:03:25.365021020+02:00 stderr F + echo ''
2025-09-17T16:03:25.365181366+02:00 stderr F + echo '[]: :'
2025-09-17T16:03:25.365419812+02:00 stderr F + chmod 0600 /etc/postfix/sasl_passwd
2025-09-17T16:03:25.365942291+02:00 stdout F starting php-fpm
2025-09-17T16:03:25.365959822+02:00 stderr F + echo 'starting php-fpm'
2025-09-17T16:03:25.365959822+02:00 stderr F + mkdir -p /run/php
2025-09-17T16:03:25.367024974+02:00 stderr F + postmap /etc/postfix/sasl_passwd
2025-09-17T16:03:25.367848393+02:00 stderr F + exec /usr/sbin/php-fpm8.1
2025-09-17T16:03:25.373960034+02:00 stderr F postmap: fatal: myorigin file /etc/mailname is empty
2025-09-17T16:03:25.522545148+02:00 stderr F ++ VALUE=
2025-09-17T16:03:25.522545148+02:00 stderr F ++ '[' -z '' ']'
2025-09-17T16:03:25.523129917+02:00 stderr F +++ get_mediawiki_variable wgDBtype
2025-09-17T16:03:25.523163974+02:00 stderr F +++ php /getMediawikiSettings.php --variable=wgDBtype --format=string
2025-09-17T16:03:25.732608809+02:00 stderr F ++ VALUE=mysql
2025-09-17T16:03:25.732608809+02:00 stderr F ++ echo mysql
2025-09-17T16:03:25.732944969+02:00 stderr F + WG_DB_TYPE=mysql
2025-09-17T16:03:25.733518099+02:00 stderr F ++ get_mediawiki_db_var wgDBserver
2025-09-17T16:03:25.733548685+02:00 stderr F ++ case $1 in
2025-09-17T16:03:25.733548685+02:00 stderr F ++ I=host
2025-09-17T16:03:25.734042839+02:00 stderr F +++ php /getMediawikiSettings.php --variable=wgDBservers --format=string
2025-09-17T16:03:25.936232305+02:00 stderr F ++ VALUE=
2025-09-17T16:03:25.936232305+02:00 stderr F ++ '[' -z '' ']'
2025-09-17T16:03:25.936833707+02:00 stderr F +++ get_mediawiki_variable wgDBserver
2025-09-17T16:03:25.936863551+02:00 stderr F +++ php /getMediawikiSettings.php --variable=wgDBserver --format=string
2025-09-17T16:03:26.150608499+02:00 stderr F ++ VALUE=db-instance
2025-09-17T16:03:26.150608499+02:00 stderr F ++ echo db-instance
2025-09-17T16:03:26.150992049+02:00 stderr F + WG_DB_SERVER=db-instance
2025-09-17T16:03:26.151617858+02:00 stderr F ++ get_mediawiki_db_var wgDBname
2025-09-17T16:03:26.151690659+02:00 stderr F ++ case $1 in
2025-09-17T16:03:26.151690659+02:00 stderr F ++ I=dbname
2025-09-17T16:03:26.152304422+02:00 stderr F +++ php /getMediawikiSettings.php --variable=wgDBservers --format=string
2025-09-17T16:03:26.371633275+02:00 stderr F ++ VALUE=
2025-09-17T16:03:26.371710708+02:00 stderr F ++ '[' -z '' ']'
2025-09-17T16:03:26.372218908+02:00 stderr F +++ get_mediawiki_variable wgDBname
2025-09-17T16:03:26.372262868+02:00 stderr F +++ php /getMediawikiSettings.php --variable=wgDBname --format=string
2025-09-17T16:03:26.374617968+02:00 stderr F + service postfix start
2025-09-17T16:03:26.601542006+02:00 stderr F ++ VALUE=mediawiki
2025-09-17T16:03:26.601542006+02:00 stderr F ++ echo mediawiki
2025-09-17T16:03:26.601906442+02:00 stderr F + WG_DB_NAME=mediawiki
2025-09-17T16:03:26.602457635+02:00 stderr F ++ get_mediawiki_db_var wgDBuser
2025-09-17T16:03:26.602644426+02:00 stderr F ++ case $1 in
2025-09-17T16:03:26.602644426+02:00 stderr F ++ I=user
2025-09-17T16:03:26.603228071+02:00 stderr F +++ php /getMediawikiSettings.php --variable=wgDBservers --format=string
2025-09-17T16:03:26.812787473+02:00 stderr F ++ VALUE=
2025-09-17T16:03:26.812846659+02:00 stderr F ++ '[' -z '' ']'
2025-09-17T16:03:26.813522146+02:00 stderr F +++ get_mediawiki_variable wgDBuser
2025-09-17T16:03:26.813579245+02:00 stderr F +++ php /getMediawikiSettings.php --variable=wgDBuser --format=string
2025-09-17T16:03:27.028494321+02:00 stderr F ++ VALUE=mediawiki
2025-09-17T16:03:27.028574567+02:00 stderr F ++ echo mediawiki
2025-09-17T16:03:27.028908897+02:00 stderr F + WG_DB_USER=mediawiki
2025-09-17T16:03:27.029567692+02:00 stderr F ++ get_mediawiki_db_var wgDBpassword
2025-09-17T16:03:27.029597832+02:00 stderr F ++ case $1 in
2025-09-17T16:03:27.029597832+02:00 stderr F ++ I=password
2025-09-17T16:03:27.030069503+02:00 stderr F +++ php /getMediawikiSettings.php --variable=wgDBservers --format=string
2025-09-17T16:03:27.227458513+02:00 stderr F ++ VALUE=
2025-09-17T16:03:27.227518877+02:00 stderr F ++ '[' -z '' ']'
2025-09-17T16:03:27.228138072+02:00 stderr F +++ get_mediawiki_variable wgDBpassword
2025-09-17T16:03:27.228161252+02:00 stderr F +++ php /getMediawikiSettings.php --variable=wgDBpassword --format=string
2025-09-17T16:03:27.395068051+02:00 stdout F .
2025-09-17T16:03:27.395537644+02:00 stderr F + rm -rf /run/apache2/socks '/tmp/apache2*'
2025-09-17T16:03:27.397258839+02:00 stderr F + exec /usr/sbin/apachectl -DFOREGROUND
2025-09-17T16:03:27.420238014+02:00 stderr F ++ VALUE='MediaWiki..!'
2025-09-17T16:03:27.420238014+02:00 stderr F ++ echo 'MediaWiki..!'
2025-09-17T16:03:27.420671250+02:00 stderr F + WG_DB_PASSWORD='MediaWiki..!'
2025-09-17T16:03:27.421333056+02:00 stderr F ++ get_mediawiki_variable wgSQLiteDataDir
2025-09-17T16:03:27.421377493+02:00 stderr F ++ php /getMediawikiSettings.php --variable=wgSQLiteDataDir --format=string
2025-09-17T16:03:27.427121750+02:00 stderr F [Wed Sep 17 14:03:27.426938 2025] [core:warn] [pid 253:tid 253] AH00111: Config variable ${APACHE_REMOTE_IP_HEADER} is not defined
2025-09-17T16:03:27.428528951+02:00 stderr F AH00558: apache2: Could not reliably determine the server's fully qualified domain name, using 10.85.0.94. Set the 'ServerName' directive globally to suppress this message
2025-09-17T16:03:27.634476814+02:00 stderr F + WG_SQLITE_DATA_DIR=
2025-09-17T16:03:27.635032013+02:00 stderr F ++ get_mediawiki_variable wgSearchType
2025-09-17T16:03:27.635085686+02:00 stderr F ++ php /getMediawikiSettings.php --variable=wgSearchType --format=string
2025-09-17T16:03:27.842340657+02:00 stderr F + WG_SEARCH_TYPE=
2025-09-17T16:03:27.842893882+02:00 stderr F ++ php /getMediawikiSettings.php --versions --format=md5
2025-09-17T16:03:28.055717895+02:00 stderr F + VERSION_HASH=f4e9c770e191e6df7b8a1f0977fc47ab
2025-09-17T16:03:28.056267769+02:00 stdout F Checking for LocalSettings...
2025-09-17T16:03:28.056285592+02:00 stderr F + echo 'Checking for LocalSettings...'
2025-09-17T16:03:28.056468705+02:00 stderr F + '[' -e /mediawiki/config/LocalSettings.php ']'
2025-09-17T16:03:28.056508054+02:00 stderr F + isTrue true
2025-09-17T16:03:28.056521370+02:00 stderr F + case $1 in
2025-09-17T16:03:28.056531798+02:00 stderr F + return 0
2025-09-17T16:03:28.056555856+02:00 stderr F + waitdatabase
2025-09-17T16:03:28.056603267+02:00 stderr F + '[' -n '' ']'
2025-09-17T16:03:28.056603267+02:00 stderr F + '[' mysql = sqlite ']'
2025-09-17T16:03:28.056623435+02:00 stderr F + '[' mysql '!=' mysql ']'
2025-09-17T16:03:28.056623435+02:00 stderr F + isFalse ''
2025-09-17T16:03:28.056646707+02:00 stderr F + case $1 in
2025-09-17T16:03:28.056646707+02:00 stderr F + return 0
2025-09-17T16:03:28.056669026+02:00 stderr F + echo 'Waiting for database to start'
2025-09-17T16:03:28.056669026+02:00 stderr F Waiting for database to start
2025-09-17T16:03:28.056690297+02:00 stderr F + /wait-for-it.sh -t 86400 db-instance
2025-09-17T16:03:28.060530501+02:00 stderr F Unknown argument: db-instance
2025-09-17T16:03:28.061968540+02:00 stderr F Usage:
2025-09-17T16:03:28.061968540+02:00 stderr F     wait-for-it.sh host:port [-s] [-t timeout] [-- command args]
2025-09-17T16:03:28.061968540+02:00 stderr F     -h HOST | --host=HOST       Host or IP under test
2025-09-17T16:03:28.061968540+02:00 stderr F     -p PORT | --port=PORT       TCP port under test
2025-09-17T16:03:28.061968540+02:00 stderr F                                 Alternatively, you specify the host and port as host:port
2025-09-17T16:03:28.061968540+02:00 stderr F     -s | --strict               Only execute subcommand if the test succeeds
2025-09-17T16:03:28.061968540+02:00 stderr F     -q | --quiet                Don't output any status messages
2025-09-17T16:03:28.061968540+02:00 stderr F     -t TIMEOUT | --timeout=TIMEOUT
2025-09-17T16:03:28.061968540+02:00 stderr F                                 Timeout in seconds, zero for no timeout
2025-09-17T16:03:28.061968540+02:00 stderr F     -- COMMAND ARGS             Execute command with args after the test finishes
2025-09-17T16:03:28.062376302+02:00 stderr F + mysql=(mysql -h "$WG_DB_SERVER" -u"$WG_DB_USER" -p"$WG_DB_PASSWORD")
2025-09-17T16:03:28.062441436+02:00 stderr F + for i in {60..0}
2025-09-17T16:03:28.062823520+02:00 stderr F + echo 'SELECT 1'
2025-09-17T16:03:28.063089452+02:00 stderr F + mysql -h db-instance -umediawiki '-pMediaWiki..!'
2025-09-17T16:03:28.129408269+02:00 stderr F + db_started=1
2025-09-17T16:03:28.129408269+02:00 stderr F + break
2025-09-17T16:03:28.129496316+02:00 stderr F + '[' 60 = 0 ']'
2025-09-17T16:03:28.129496316+02:00 stderr F + echo 'Successfully connected to the database.'
2025-09-17T16:03:28.129496316+02:00 stderr F Successfully connected to the database.
2025-09-17T16:03:28.129496316+02:00 stderr F + return 0
2025-09-17T16:03:28.129565076+02:00 stderr F + rm /var/www/mediawiki/.maintenance
2025-09-17T16:03:28.131010229+02:00 stderr F + run_autoupdate
2025-09-17T16:03:28.131010229+02:00 stderr F + echo 'Check for the need to run maintenance scripts'
2025-09-17T16:03:28.131039777+02:00 stderr F Check for the need to run maintenance scripts
2025-09-17T16:03:28.131114254+02:00 stderr F + run_maintenance_script_if_needed maintenance_update REL1_43-1.43.3-0-f4e9c770e191e6df7b8a1f0977fc47ab 'maintenance/update.php --quick'
2025-09-17T16:03:28.131131786+02:00 stderr F + '[' -f /mediawiki/maintenance_update.info ']'
2025-09-17T16:03:28.131199572+02:00 stderr F + update_info=
2025-09-17T16:03:28.131199572+02:00 stderr F + [[ '' != \R\E\L\1\_\4\3\-\1\.\4\3\.\3\-\0\-\f\4\e\9\c\7\7\0\e\1\9\1\e\6\d\f\7\b\8\a\1\f\0\9\7\7\f\c\4\7\a\b ]]
2025-09-17T16:03:28.131199572+02:00 stderr F + [[ -n REL1_43-1.43.3-0-f4e9c770e191e6df7b8a1f0977fc47ab ]]
2025-09-17T16:03:28.131221163+02:00 stderr F + waitdatabase
2025-09-17T16:03:28.131323999+02:00 stderr F + '[' -n 1 ']'
2025-09-17T16:03:28.131323999+02:00 stderr F + return 0
2025-09-17T16:03:28.131341383+02:00 stderr F + i=3
2025-09-17T16:03:28.131358969+02:00 stderr F + '[' -n 'maintenance/update.php --quick' ']'
2025-09-17T16:03:28.132461928+02:00 stderr F ++ echo 'maintenance/update.php --quick'
2025-09-17T16:03:28.132645381+02:00 stderr F ++ awk '{print $1}'
2025-09-17T16:03:28.134577089+02:00 stderr F + '[' '!' -f maintenance/update.php ']'
2025-09-17T16:03:28.134617550+02:00 stderr F + echo 'Run maintenance script: maintenance/update.php --quick'
2025-09-17T16:03:28.134617550+02:00 stderr F Run maintenance script: maintenance/update.php --quick
2025-09-17T16:03:28.134677676+02:00 stderr F + runuser -c 'php maintenance/update.php --quick' -s /bin/bash www-data
2025-09-17T16:03:28.373764519+02:00 stdout F MediaWiki 1.43.3 Updater
2025-09-17T16:03:28.373764519+02:00 stdout F
2025-09-17T16:03:28.379464162+02:00 stdout F Your composer.lock file is up to date with current dependencies!
2025-09-17T16:03:28.401320275+02:00 stdout F Going to run database updates for mediawiki
2025-09-17T16:03:28.401320275+02:00 stdout F Depending on the size of your database this may take a while!
2025-09-17T16:03:28.404159531+02:00 stderr F Can not upgrade from versions older than 1.35, please upgrade to that version or later first.
2025-09-17T16:03:28.413885491+02:00 stderr F + echo 'An error occurred when the maintenance script maintenance/update.php --quick was running'
2025-09-17T16:03:28.413885491+02:00 stderr F An error occurred when the maintenance script maintenance/update.php --quick was running
2025-09-17T16:03:28.413930741+02:00 stderr F + return 0
2025-09-17T16:03:28.413930741+02:00 stderr F + echo 'Auto-update completed'
2025-09-17T16:03:28.413943372+02:00 stderr F Auto-update completed
2025-09-17T16:03:28.413974846+02:00 stderr F + run_maintenance_scripts
2025-09-17T16:03:28.414650668+02:00 stderr F ++ find /maintenance-scripts/ -maxdepth 1 -mindepth 1 -type f -name '*.sh'
2025-09-17T16:03:28.416675925+02:00 stderr F + for maintenance_script in $(find /maintenance-scripts/ -maxdepth 1 -mindepth 1 -type f -name "*.sh")
2025-09-17T16:03:28.417169066+02:00 stderr F ++ basename /maintenance-scripts/monitor-directories.sh
2025-09-17T16:03:28.418192562+02:00 stderr F + script_name=monitor-directories.sh
2025-09-17T16:03:28.418192562+02:00 stderr F + [[ monitor-directories.sh == mw* ]]
2025-09-17T16:03:28.418219842+02:00 stdout F Running monitor-directories.sh with user www-data...
2025-09-17T16:03:28.418229077+02:00 stderr F + echo 'Running monitor-directories.sh with user www-data...'
2025-09-17T16:03:28.418532229+02:00 stderr F + for maintenance_script in $(find /maintenance-scripts/ -maxdepth 1 -mindepth 1 -type f -name "*.sh")
2025-09-17T16:03:28.418629414+02:00 stderr F + nice -n 20 runuser -c /maintenance-scripts/monitor-directories.sh -s /bin/bash www-data
2025-09-17T16:03:28.419018818+02:00 stderr F ++ basename /maintenance-scripts/mw_job_runner.sh
2025-09-17T16:03:28.420069027+02:00 stderr F + script_name=mw_job_runner.sh
2025-09-17T16:03:28.420069027+02:00 stderr F + [[ mw_job_runner.sh == mw* ]]
2025-09-17T16:03:28.420339647+02:00 stderr F + for maintenance_script in $(find /maintenance-scripts/ -maxdepth 1 -mindepth 1 -type f -name "*.sh")
2025-09-17T16:03:28.420390091+02:00 stderr F + run_mw_script mw_job_runner.sh
2025-09-17T16:03:28.420521293+02:00 stderr F + sleep 3
2025-09-17T16:03:28.420896770+02:00 stderr F ++ basename /maintenance-scripts/mw_sitemap_generator.sh
2025-09-17T16:03:28.421933244+02:00 stderr F + script_name=mw_sitemap_generator.sh
2025-09-17T16:03:28.421933244+02:00 stderr F + [[ mw_sitemap_generator.sh == mw* ]]
2025-09-17T16:03:28.422259923+02:00 stderr F + for maintenance_script in $(find /maintenance-scripts/ -maxdepth 1 -mindepth 1 -type f -name "*.sh")
2025-09-17T16:03:28.422344402+02:00 stderr F + run_mw_script mw_sitemap_generator.sh
2025-09-17T16:03:28.422467363+02:00 stderr F + sleep 3
2025-09-17T16:03:28.422779788+02:00 stderr F ++ basename /maintenance-scripts/mw_transcoder.sh
2025-09-17T16:03:28.423896338+02:00 stderr F + script_name=mw_transcoder.sh
2025-09-17T16:03:28.423896338+02:00 stderr F + [[ mw_transcoder.sh == mw* ]]
2025-09-17T16:03:28.424315332+02:00 stderr F + run_mw_script mw_transcoder.sh
2025-09-17T16:03:28.424413948+02:00 stderr F + sleep 3
2025-09-17T16:03:28.424413948+02:00 stderr F + sleep 4
2025-09-17T16:03:28.430448609+02:00 stderr F + userexts=/var/www/mediawiki/w/user-extensions
2025-09-17T16:03:28.430448609+02:00 stderr F + extensions=/var/www/mediawiki/w/extensions
2025-09-17T16:03:28.430448609+02:00 stderr F + canexts=/var/www/mediawiki/w/canasta-extensions
2025-09-17T16:03:28.430483670+02:00 stderr F + userskins=/var/www/mediawiki/w/user-skins
2025-09-17T16:03:28.430483670+02:00 stderr F + skins=/var/www/mediawiki/w/skins
2025-09-17T16:03:28.430483670+02:00 stderr F + canskins=/var/www/mediawiki/w/canasta-skins
2025-09-17T16:03:28.430949230+02:00 stderr F + inotifywait -m -e create,moved_to,delete,moved_from --format %e:%f -- /var/www/mediawiki/w/user-extensions
2025-09-17T16:03:28.431151566+02:00 stderr F + IFS=:
2025-09-17T16:03:28.431151566+02:00 stderr F + read -r event file
2025-09-17T16:03:28.431935943+02:00 stderr F Setting up watches.
2025-09-17T16:03:28.431935943+02:00 stderr F Watches established.
2025-09-17T16:03:31.422309312+02:00 stderr F + local script_name=mw_job_runner.sh
2025-09-17T16:03:31.422309312+02:00 stderr F + script_name_no_ext=mw_job_runner
2025-09-17T16:03:31.423324344+02:00 stderr F ++ basename mw_job_runner
2025-09-17T16:03:31.423624680+02:00 stderr F ++ tr '[:lower:]' '[:upper:]'
2025-09-17T16:03:31.423889033+02:00 stderr F + local script_name=mw_sitemap_generator.sh
2025-09-17T16:03:31.423941368+02:00 stderr F + script_name_no_ext=mw_sitemap_generator
2025-09-17T16:03:31.425136225+02:00 stderr F ++ basename mw_sitemap_generator
2025-09-17T16:03:31.425166113+02:00 stderr F + script_name_upper=MW_JOB_RUNNER
2025-09-17T16:03:31.425196920+02:00 stderr F ++ tr '[:lower:]' '[:upper:]'
2025-09-17T16:03:31.425196920+02:00 stderr F + local MW_ENABLE_VAR=MW_ENABLE_JOB_RUNNER
2025-09-17T16:03:31.425249938+02:00 stderr F + isTrue true
2025-09-17T16:03:31.425265874+02:00 stderr F + case $1 in
2025-09-17T16:03:31.425265874+02:00 stderr F + return 0
2025-09-17T16:03:31.425319831+02:00 stderr F + echo 'Running mw_job_runner.sh with user www-data...'
2025-09-17T16:03:31.425335840+02:00 stdout F Running mw_job_runner.sh with user www-data...
2025-09-17T16:03:31.425346759+02:00 stderr F + nice -n 20 runuser -c /maintenance-scripts/mw_job_runner.sh -s /bin/bash www-data
2025-09-17T16:03:31.425749002+02:00 stderr F + local script_name=mw_transcoder.sh
2025-09-17T16:03:31.425778882+02:00 stderr F + script_name_no_ext=mw_transcoder
2025-09-17T16:03:31.426664524+02:00 stderr F ++ basename mw_transcoder
2025-09-17T16:03:31.426891161+02:00 stderr F ++ tr '[:lower:]' '[:upper:]'
2025-09-17T16:03:31.426891161+02:00 stderr F + script_name_upper=MW_SITEMAP_GENERATOR
2025-09-17T16:03:31.426973489+02:00 stderr F + local MW_ENABLE_VAR=MW_ENABLE_SITEMAP_GENERATOR
2025-09-17T16:03:31.426999050+02:00 stderr F + isTrue false
2025-09-17T16:03:31.427022823+02:00 stderr F + case $1 in
2025-09-17T16:03:31.427045625+02:00 stderr F + return 1
2025-09-17T16:03:31.427069076+02:00 stderr F + echo 'mw_sitemap_generator.sh is disabled.'
2025-09-17T16:03:31.427108491+02:00 stderr F mw_sitemap_generator.sh is disabled.
2025-09-17T16:03:31.428247783+02:00 stderr F + script_name_upper=MW_TRANSCODER
2025-09-17T16:03:31.428247783+02:00 stderr F + local MW_ENABLE_VAR=MW_ENABLE_TRANSCODER
2025-09-17T16:03:31.428287020+02:00 stderr F + isTrue true
2025-09-17T16:03:31.428311331+02:00 stderr F + case $1 in
2025-09-17T16:03:31.428311331+02:00 stderr F + return 0
2025-09-17T16:03:31.428363574+02:00 stderr F + echo 'Running mw_transcoder.sh with user www-data...'
2025-09-17T16:03:31.428387850+02:00 stdout F Running mw_transcoder.sh with user www-data...
2025-09-17T16:03:31.428405999+02:00 stderr F + nice -n 20 runuser -c /maintenance-scripts/mw_transcoder.sh -s /bin/bash www-data
2025-09-17T16:03:31.436091067+02:00 stdout F Starting job runner (in 10 seconds)...
2025-09-17T16:03:31.439125166+02:00 stdout F Starting transcoder (in 180 seconds)...
2025-09-17T16:03:32.426003716+02:00 stdout F
2025-09-17T16:03:32.426003716+02:00 stdout F
2025-09-17T16:03:32.426003716+02:00 stdout F >>>>> run-maintenance-scripts.sh <<<<<
2025-09-17T16:03:32.426003716+02:00 stdout F
2025-09-17T16:03:32.426003716+02:00 stdout F
2025-09-17T16:03:32.426069633+02:00 stderr F + printf '\n\n>>>>> run-maintenance-scripts.sh <<<<<\n\n\n'
2025-09-17T16:03:34.013660002+02:00 stdout F Warning: wikis.yaml does not exist. Running general jobs.
2025-09-17T16:03:34.237346588+02:00 stderr F JobQueueError from line 932 of /var/www/mediawiki/w/includes/jobqueue/JobQueueDB.php: Wikimedia\Rdbms\DBQueryError: Error 1146: Table 'mediawiki.job' doesn't exist
2025-09-17T16:03:34.237346588+02:00 stderr F Function: JobQueueDB::claimRandom
2025-09-17T16:03:34.237346588+02:00 stderr F Query: SELECT  job_id,job_cmd,job_namespace,job_title,job_timestamp,job_params,job_random,job_attempts,job_token,job_token_timestamp,job_sha1  FROM `job`    WHERE job_cmd = 'enotifNotify' AND job_token = ''  LIMIT 154,1
2025-09-17T16:03:34.237346588+02:00 stderr F
2025-09-17T16:03:34.237346588+02:00 stderr F #0 /var/www/mediawiki/w/includes/jobqueue/JobQueueDB.php(336): JobQueueDB->getDBException()
2025-09-17T16:03:34.237346588+02:00 stderr F #1 /var/www/mediawiki/w/includes/jobqueue/JobQueue.php(409): JobQueueDB->doPop()
2025-09-17T16:03:34.237346588+02:00 stderr F #2 /var/www/mediawiki/w/includes/jobqueue/JobQueueGroup.php(233): JobQueue->pop()
2025-09-17T16:03:34.237346588+02:00 stderr F #3 /var/www/mediawiki/w/includes/jobqueue/JobRunner.php(209): JobQueueGroup->pop()
2025-09-17T16:03:34.237346588+02:00 stderr F #4 /var/www/mediawiki/w/maintenance/runJobs.php(101): JobRunner->run()
2025-09-17T16:03:34.237346588+02:00 stderr F #5 /var/www/mediawiki/w/maintenance/includes/MaintenanceRunner.php(703): RunJobs->execute()
2025-09-17T16:03:34.237346588+02:00 stderr F #6 /var/www/mediawiki/w/maintenance/doMaintenance.php(100): MediaWiki\Maintenance\MaintenanceRunner->run()
2025-09-17T16:03:34.237346588+02:00 stderr F #7 /var/www/mediawiki/w/maintenance/runJobs.php(140): require_once('...')
2025-09-17T16:03:34.237346588+02:00 stderr F #8 {main}
2025-09-17T16:03:35.443834008+02:00 stdout F Job queue is empty.
2025-09-17T16:03:36.690113144+02:00 stderr F JobQueueError from line 932 of /var/www/mediawiki/w/includes/jobqueue/JobQueueDB.php: Wikimedia\Rdbms\DBQueryError: Error 1146: Table 'mediawiki.job' doesn't exist
2025-09-17T16:03:36.690113144+02:00 stderr F Function: JobQueueDB::claimRandom
2025-09-17T16:03:36.690113144+02:00 stderr F Query: SELECT  job_id,job_cmd,job_namespace,job_title,job_timestamp,job_params,job_random,job_attempts,job_token,job_token_timestamp,job_sha1  FROM `job`    WHERE job_cmd = 'refreshLinks' AND job_token = ''  LIMIT 50,1
2025-09-17T16:03:36.690113144+02:00 stderr F
2025-09-17T16:03:36.690113144+02:00 stderr F #0 /var/www/mediawiki/w/includes/jobqueue/JobQueueDB.php(336): JobQueueDB->getDBException()
2025-09-17T16:03:36.690113144+02:00 stderr F #1 /var/www/mediawiki/w/includes/jobqueue/JobQueue.php(409): JobQueueDB->doPop()
2025-09-17T16:03:36.690113144+02:00 stderr F #2 /var/www/mediawiki/w/includes/jobqueue/JobQueueGroup.php(233): JobQueue->pop()
2025-09-17T16:03:36.690113144+02:00 stderr F #3 /var/www/mediawiki/w/includes/jobqueue/JobRunner.php(209): JobQueueGroup->pop()
2025-09-17T16:03:36.690113144+02:00 stderr F #4 /var/www/mediawiki/w/maintenance/runJobs.php(101): JobRunner->run()
2025-09-17T16:03:36.690113144+02:00 stderr F #5 /var/www/mediawiki/w/maintenance/includes/MaintenanceRunner.php(703): RunJobs->execute()
2025-09-17T16:03:36.690113144+02:00 stderr F #6 /var/www/mediawiki/w/maintenance/doMaintenance.php(100): MediaWiki\Maintenance\MaintenanceRunner->run()
2025-09-17T16:03:36.690113144+02:00 stderr F #7 /var/www/mediawiki/w/maintenance/runJobs.php(140): require_once('...')
2025-09-17T16:03:36.690113144+02:00 stderr F #8 {main}
2025-09-17T16:03:37.914785126+02:00 stderr F JobQueueError from line 932 of /var/www/mediawiki/w/includes/jobqueue/JobQueueDB.php: Wikimedia\Rdbms\DBQueryError: Error 1146: Table 'mediawiki.job' doesn't exist
2025-09-17T16:03:37.914785126+02:00 stderr F Function: JobQueueDB::claimRandom
2025-09-17T16:03:37.914785126+02:00 stderr F Query: SELECT  job_id,job_cmd,job_namespace,job_title,job_timestamp,job_params,job_random,job_attempts,job_token,job_token_timestamp,job_sha1  FROM `job`    WHERE job_cmd = 'htmlCacheUpdate' AND job_token = ''  LIMIT 101,1
2025-09-17T16:03:37.914785126+02:00 stderr F
2025-09-17T16:03:37.914785126+02:00 stderr F #0 /var/www/mediawiki/w/includes/jobqueue/JobQueueDB.php(336): JobQueueDB->getDBException()
2025-09-17T16:03:37.914785126+02:00 stderr F #1 /var/www/mediawiki/w/includes/jobqueue/JobQueue.php(409): JobQueueDB->doPop()
2025-09-17T16:03:37.914785126+02:00 stderr F #2 /var/www/mediawiki/w/includes/jobqueue/JobQueueGroup.php(233): JobQueue->pop()
2025-09-17T16:03:37.914785126+02:00 stderr F #3 /var/www/mediawiki/w/includes/jobqueue/JobRunner.php(209): JobQueueGroup->pop()
2025-09-17T16:03:37.914785126+02:00 stderr F #4 /var/www/mediawiki/w/maintenance/runJobs.php(101): JobRunner->run()
2025-09-17T16:03:37.914785126+02:00 stderr F #5 /var/www/mediawiki/w/maintenance/includes/MaintenanceRunner.php(703): RunJobs->execute()
2025-09-17T16:03:37.914785126+02:00 stderr F #6 /var/www/mediawiki/w/maintenance/doMaintenance.php(100): MediaWiki\Maintenance\MaintenanceRunner->run()
2025-09-17T16:03:37.914785126+02:00 stderr F #7 /var/www/mediawiki/w/maintenance/runJobs.php(140): require_once('...')
2025-09-17T16:03:37.914785126+02:00 stderr F #8 {main}
2025-09-17T16:03:39.146209388+02:00 stderr F Wikimedia\Rdbms\DBQueryError from line 1198 of /var/www/mediawiki/w/includes/libs/rdbms/database/Database.php: Error 1146: Table 'mediawiki.job' doesn't exist
2025-09-17T16:03:39.146209388+02:00 stderr F Function: JobQueueDB::doGetSiblingQueuesWithJobs
2025-09-17T16:03:39.146209388+02:00 stderr F Query: SELECT DISTINCT job_cmd  FROM `job`    WHERE job_cmd IN ('deletePage','refreshLinks','deleteLinks','htmlCacheUpdate','sendMail','enotifNotify','fixDoubleRedirect','AssembleUploadChunks','PublishStashedFile','ThumbnailRender','UploadFromUrl','recentChangesUpdate','refreshLinksPrioritized','refreshLinksDynamic','activityUpdateJob','categoryMembershipChange','clearUserWatchlist','watchlistExpiry','cdnPurge','userGroupExpiry','clearWatchlistNotifications','userOptionsUpdate','revertedTagUpdate','null','userEditCountInit','parsoidCachePrewarm','renameUser')
2025-09-17T16:03:39.146209388+02:00 stderr F
2025-09-17T16:03:39.146209388+02:00 stderr F #0 /var/www/mediawiki/w/includes/libs/rdbms/database/Database.php(1182): Wikimedia\Rdbms\Database->getQueryException()
2025-09-17T16:03:39.146209388+02:00 stderr F #1 /var/www/mediawiki/w/includes/libs/rdbms/database/Database.php(1156): Wikimedia\Rdbms\Database->getQueryExceptionAndLog()
2025-09-17T16:03:39.146209388+02:00 stderr F #2 /var/www/mediawiki/w/includes/libs/rdbms/database/Database.php(647): Wikimedia\Rdbms\Database->reportQueryError()
2025-09-17T16:03:39.146209388+02:00 stderr F #3 /var/www/mediawiki/w/includes/libs/rdbms/database/Database.php(1345): Wikimedia\Rdbms\Database->query()
2025-09-17T16:03:39.146209388+02:00 stderr F #4 /var/www/mediawiki/w/includes/libs/rdbms/database/DBConnRef.php(127): Wikimedia\Rdbms\Database->select()
2025-09-17T16:03:39.146209388+02:00 stderr F #5 /var/www/mediawiki/w/includes/libs/rdbms/database/DBConnRef.php(351): Wikimedia\Rdbms\DBConnRef->__call()
2025-09-17T16:03:39.146209388+02:00 stderr F #6 /var/www/mediawiki/w/includes/libs/rdbms/querybuilder/SelectQueryBuilder.php(745): Wikimedia\Rdbms\DBConnRef->select()
2025-09-17T16:03:39.146209388+02:00 stderr F #7 /var/www/mediawiki/w/includes/jobqueue/JobQueueDB.php(662): Wikimedia\Rdbms\SelectQueryBuilder->fetchResultSet()
2025-09-17T16:03:39.146209388+02:00 stderr F #8 /var/www/mediawiki/w/includes/jobqueue/JobQueue.php(703): JobQueueDB->doGetSiblingQueuesWithJobs()
2025-09-17T16:03:39.146209388+02:00 stderr F #9 /var/www/mediawiki/w/includes/jobqueue/JobQueueGroup.php(368): JobQueue->getSiblingQueuesWithJobs()
2025-09-17T16:03:39.146209388+02:00 stderr F #10 /var/www/mediawiki/w/includes/jobqueue/JobQueueGroup.php(238): JobQueueGroup->getQueuesWithJobs()
2025-09-17T16:03:39.146209388+02:00 stderr F #11 /var/www/mediawiki/w/includes/jobqueue/JobRunner.php(205): JobQueueGroup->pop()
2025-09-17T16:03:39.146209388+02:00 stderr F #12 /var/www/mediawiki/w/maintenance/runJobs.php(101): JobRunner->run()
2025-09-17T16:03:39.146209388+02:00 stderr F #13 /var/www/mediawiki/w/maintenance/includes/MaintenanceRunner.php(703): RunJobs->execute()
2025-09-17T16:03:39.146209388+02:00 stderr F #14 /var/www/mediawiki/w/maintenance/doMaintenance.php(100): MediaWiki\Maintenance\MaintenanceRunner->run()
2025-09-17T16:03:39.146209388+02:00 stderr F #15 /var/www/mediawiki/w/maintenance/runJobs.php(140): require_once('...')
2025-09-17T16:03:39.146209388+02:00 stderr F #16 {main}
2025-09-17T16:03:41.438350575+02:00 stdout F Warning: wikis.yaml does not exist. Running general jobs.
2025-09-17T16:03:41.654737596+02:00 stderr F JobQueueError from line 932 of /var/www/mediawiki/w/includes/jobqueue/JobQueueDB.php: Wikimedia\Rdbms\DBQueryError: Error 1146: Table 'mediawiki.job' doesn't exist
2025-09-17T16:03:41.654737596+02:00 stderr F Function: JobQueueDB::claimRandom
2025-09-17T16:03:41.654737596+02:00 stderr F Query: SELECT  job_id,job_cmd,job_namespace,job_title,job_timestamp,job_params,job_random,job_attempts,job_token,job_token_timestamp,job_sha1  FROM `job`    WHERE job_cmd = 'enotifNotify' AND job_token = ''  LIMIT 81,1
2025-09-17T16:03:41.654737596+02:00 stderr F
2025-09-17T16:03:41.654737596+02:00 stderr F #0 /var/www/mediawiki/w/includes/jobqueue/JobQueueDB.php(336): JobQueueDB->getDBException()
2025-09-17T16:03:41.654737596+02:00 stderr F #1 /var/www/mediawiki/w/includes/jobqueue/JobQueue.php(409): JobQueueDB->doPop()
2025-09-17T16:03:41.654737596+02:00 stderr F #2 /var/www/mediawiki/w/includes/jobqueue/JobQueueGroup.php(233): JobQueue->pop()
2025-09-17T16:03:41.654737596+02:00 stderr F #3 /var/www/mediawiki/w/includes/jobqueue/JobRunner.php(209): JobQueueGroup->pop()
2025-09-17T16:03:41.654737596+02:00 stderr F #4 /var/www/mediawiki/w/maintenance/runJobs.php(101): JobRunner->run()
2025-09-17T16:03:41.654737596+02:00 stderr F #5 /var/www/mediawiki/w/maintenance/includes/MaintenanceRunner.php(703): RunJobs->execute()
2025-09-17T16:03:41.654737596+02:00 stderr F #6 /var/www/mediawiki/w/maintenance/doMaintenance.php(100): MediaWiki\Maintenance\MaintenanceRunner->run()
2025-09-17T16:03:41.654737596+02:00 stderr F #7 /var/www/mediawiki/w/maintenance/runJobs.php(140): require_once('...')
2025-09-17T16:03:41.654737596+02:00 stderr F #8 {main}
2025-09-17T16:03:42.844283146+02:00 stdout F Job queue is empty.
2025-09-17T16:03:44.075750876+02:00 stderr F JobQueueError from line 932 of /var/www/mediawiki/w/includes/jobqueue/JobQueueDB.php: Wikimedia\Rdbms\DBQueryError: Error 1146: Table 'mediawiki.job' doesn't exist
2025-09-17T16:03:44.075750876+02:00 stderr F Function: JobQueueDB::claimRandom
2025-09-17T16:03:44.075750876+02:00 stderr F Query: SELECT  job_id,job_cmd,job_namespace,job_title,job_timestamp,job_params,job_random,job_attempts,job_token,job_token_timestamp,job_sha1  FROM `job`    WHERE job_cmd = 'refreshLinks' AND job_token = ''  LIMIT 140,1
2025-09-17T16:03:44.075750876+02:00 stderr F
2025-09-17T16:03:44.075750876+02:00 stderr F #0 /var/www/mediawiki/w/includes/jobqueue/JobQueueDB.php(336): JobQueueDB->getDBException()
2025-09-17T16:03:44.075750876+02:00 stderr F #1 /var/www/mediawiki/w/includes/jobqueue/JobQueue.php(409): JobQueueDB->doPop()
2025-09-17T16:03:44.075750876+02:00 stderr F #2 /var/www/mediawiki/w/includes/jobqueue/JobQueueGroup.php(233): JobQueue->pop()
2025-09-17T16:03:44.075750876+02:00 stderr F #3 /var/www/mediawiki/w/includes/jobqueue/JobRunner.php(209): JobQueueGroup->pop()
2025-09-17T16:03:44.075750876+02:00 stderr F #4 /var/www/mediawiki/w/maintenance/runJobs.php(101): JobRunner->run()
2025-09-17T16:03:44.075750876+02:00 stderr F #5 /var/www/mediawiki/w/maintenance/includes/MaintenanceRunner.php(703): RunJobs->execute()
2025-09-17T16:03:44.075750876+02:00 stderr F #6 /var/www/mediawiki/w/maintenance/doMaintenance.php(100): MediaWiki\Maintenance\MaintenanceRunner->run()
2025-09-17T16:03:44.075750876+02:00 stderr F #7 /var/www/mediawiki/w/maintenance/runJobs.php(140): require_once('...')
2025-09-17T16:03:44.075750876+02:00 stderr F #8 {main}
2025-09-17T16:03:45.305769897+02:00 stderr F JobQueueError from line 932 of /var/www/mediawiki/w/includes/jobqueue/JobQueueDB.php: Wikimedia\Rdbms\DBQueryError: Error 1146: Table 'mediawiki.job' doesn't exist
2025-09-17T16:03:45.305769897+02:00 stderr F Function: JobQueueDB::claimRandom
2025-09-17T16:03:45.305769897+02:00 stderr F Query: SELECT  job_id,job_cmd,job_namespace,job_title,job_timestamp,job_params,job_random,job_attempts,job_token,job_token_timestamp,job_sha1  FROM `job`    WHERE job_cmd = 'htmlCacheUpdate' AND job_token = ''  LIMIT 10,1
2025-09-17T16:03:45.305769897+02:00 stderr F
2025-09-17T16:03:45.305769897+02:00 stderr F #0 /var/www/mediawiki/w/includes/jobqueue/JobQueueDB.php(336): JobQueueDB->getDBException()
2025-09-17T16:03:45.305769897+02:00 stderr F #1 /var/www/mediawiki/w/includes/jobqueue/JobQueue.php(409): JobQueueDB->doPop()
2025-09-17T16:03:45.305769897+02:00 stderr F #2 /var/www/mediawiki/w/includes/jobqueue/JobQueueGroup.php(233): JobQueue->pop()
2025-09-17T16:03:45.305769897+02:00 stderr F #3 /var/www/mediawiki/w/includes/jobqueue/JobRunner.php(209): JobQueueGroup->pop()
2025-09-17T16:03:45.305769897+02:00 stderr F #4 /var/www/mediawiki/w/maintenance/runJobs.php(101): JobRunner->run()
2025-09-17T16:03:45.305769897+02:00 stderr F #5 /var/www/mediawiki/w/maintenance/includes/MaintenanceRunner.php(703): RunJobs->execute()
2025-09-17T16:03:45.305769897+02:00 stderr F #6 /var/www/mediawiki/w/maintenance/doMaintenance.php(100): MediaWiki\Maintenance\MaintenanceRunner->run()
2025-09-17T16:03:45.305769897+02:00 stderr F #7 /var/www/mediawiki/w/maintenance/runJobs.php(140): require_once('...')
2025-09-17T16:03:45.305769897+02:00 stderr F #8 {main}
2025-09-17T16:03:46.538940465+02:00 stderr F Wikimedia\Rdbms\DBQueryError from line 1198 of /var/www/mediawiki/w/includes/libs/rdbms/database/Database.php: Error 1146: Table 'mediawiki.job' doesn't exist
2025-09-17T16:03:46.538940465+02:00 stderr F Function: JobQueueDB::doGetSiblingQueuesWithJobs
2025-09-17T16:03:46.538940465+02:00 stderr F Query: SELECT DISTINCT job_cmd  FROM `job`    WHERE job_cmd IN ('deletePage','refreshLinks','deleteLinks','htmlCacheUpdate','sendMail','enotifNotify','fixDoubleRedirect','AssembleUploadChunks','PublishStashedFile','ThumbnailRender','UploadFromUrl','recentChangesUpdate','refreshLinksPrioritized','refreshLinksDynamic','activityUpdateJob','categoryMembershipChange','clearUserWatchlist','watchlistExpiry','cdnPurge','userGroupExpiry','clearWatchlistNotifications','userOptionsUpdate','revertedTagUpdate','null','userEditCountInit','parsoidCachePrewarm','renameUser')
2025-09-17T16:03:46.538940465+02:00 stderr F
2025-09-17T16:03:46.538940465+02:00 stderr F #0 /var/www/mediawiki/w/includes/libs/rdbms/database/Database.php(1182): Wikimedia\Rdbms\Database->getQueryException()
2025-09-17T16:03:46.538940465+02:00 stderr F #1 /var/www/mediawiki/w/includes/libs/rdbms/database/Database.php(1156): Wikimedia\Rdbms\Database->getQueryExceptionAndLog()
2025-09-17T16:03:46.538940465+02:00 stderr F #2 /var/www/mediawiki/w/includes/libs/rdbms/database/Database.php(647): Wikimedia\Rdbms\Database->reportQueryError()
2025-09-17T16:03:46.538940465+02:00 stderr F #3 /var/www/mediawiki/w/includes/libs/rdbms/database/Database.php(1345): Wikimedia\Rdbms\Database->query()
2025-09-17T16:03:46.538940465+02:00 stderr F #4 /var/www/mediawiki/w/includes/libs/rdbms/database/DBConnRef.php(127): Wikimedia\Rdbms\Database->select()
2025-09-17T16:03:46.538940465+02:00 stderr F #5 /var/www/mediawiki/w/includes/libs/rdbms/database/DBConnRef.php(351): Wikimedia\Rdbms\DBConnRef->__call()
2025-09-17T16:03:46.538940465+02:00 stderr F #6 /var/www/mediawiki/w/includes/libs/rdbms/querybuilder/SelectQueryBuilder.php(745): Wikimedia\Rdbms\DBConnRef->select()
2025-09-17T16:03:46.538940465+02:00 stderr F #7 /var/www/mediawiki/w/includes/jobqueue/JobQueueDB.php(662): Wikimedia\Rdbms\SelectQueryBuilder->fetchResultSet()
2025-09-17T16:03:46.538940465+02:00 stderr F #8 /var/www/mediawiki/w/includes/jobqueue/JobQueue.php(703): JobQueueDB->doGetSiblingQueuesWithJobs()
2025-09-17T16:03:46.538940465+02:00 stderr F #9 /var/www/mediawiki/w/includes/jobqueue/JobQueueGroup.php(368): JobQueue->getSiblingQueuesWithJobs()
2025-09-17T16:03:46.538940465+02:00 stderr F #10 /var/www/mediawiki/w/includes/jobqueue/JobQueueGroup.php(238): JobQueueGroup->getQueuesWithJobs()
2025-09-17T16:03:46.538940465+02:00 stderr F #11 /var/www/mediawiki/w/includes/jobqueue/JobRunner.php(205): JobQueueGroup->pop()
2025-09-17T16:03:46.538940465+02:00 stderr F #12 /var/www/mediawiki/w/maintenance/runJobs.php(101): JobRunner->run()
2025-09-17T16:03:46.538940465+02:00 stderr F #13 /var/www/mediawiki/w/maintenance/includes/MaintenanceRunner.php(703): RunJobs->execute()
2025-09-17T16:03:46.538940465+02:00 stderr F #14 /var/www/mediawiki/w/maintenance/doMaintenance.php(100): MediaWiki\Maintenance\MaintenanceRunner->run()
2025-09-17T16:03:46.538940465+02:00 stderr F #15 /var/www/mediawiki/w/maintenance/runJobs.php(140): require_once('...')
2025-09-17T16:03:46.538940465+02:00 stderr F #16 {main}
2025-09-17T16:06:24.019047395+02:00 stdout F Warning: wikis.yaml does not exist. Starting the general transcoder.
2025-09-17T16:06:24.212218173+02:00 stdout F Job queue is empty.
2025-09-17T16:06:25.416648366+02:00 stdout F Job queue is empty.
2025-09-17T16:06:25.425468612+02:00 stdout F mwtranscoder waits for 60 seconds...
2025-09-17T16:06:31.440824720+02:00 stdout F Warning: wikis.yaml does not exist. Starting the general transcoder.
2025-09-17T16:06:31.633543332+02:00 stdout F Job queue is empty.
2025-09-17T16:06:32.840961301+02:00 stdout F Job queue is empty.
2025-09-17T16:06:32.850502763+02:00 stdout F mwtranscoder waits for 60 seconds...
```
