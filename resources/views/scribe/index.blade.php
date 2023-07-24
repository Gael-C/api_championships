<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
                    body .content .php-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-4.22.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-4.22.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;,&quot;php&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                                            <button type="button" class="lang-button" data-language-name="php">php</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-teams">
                                <a href="#endpoints-GETapi-teams">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-teams">
                                <a href="#endpoints-POSTapi-teams">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-teams--team_id-">
                                <a href="#endpoints-GETapi-teams--team_id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-teams--id-">
                                <a href="#endpoints-PUTapi-teams--id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-teams--id-">
                                <a href="#endpoints-DELETEapi-teams--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-leagues">
                                <a href="#endpoints-GETapi-leagues">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-leagues">
                                <a href="#endpoints-POSTapi-leagues">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-leagues--league_id-">
                                <a href="#endpoints-GETapi-leagues--league_id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-leagues--id-">
                                <a href="#endpoints-PUTapi-leagues--id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-leagues--id-">
                                <a href="#endpoints-DELETEapi-leagues--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-pictures">
                                <a href="#endpoints-GETapi-pictures">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-pictures">
                                <a href="#endpoints-POSTapi-pictures">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-pictures--picture-">
                                <a href="#endpoints-GETapi-pictures--picture-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-pictures--id-">
                                <a href="#endpoints-PUTapi-pictures--id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-pictures--id-">
                                <a href="#endpoints-DELETEapi-pictures--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-register">
                                <a href="#endpoints-POSTapi-register">Fonction qui permet de créer un nouveau user et de génerer un Token</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-login">
                                <a href="#endpoints-POSTapi-login">POST api/login</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: July 24, 2023</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>Une API REST pour accéder aux différents championnats de rugby professionnel en Europe.</p>
<aside>
    <strong>Base URL</strong>: <code></code>
</aside>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>To authenticate requests, include an <strong><code>Authorization</code></strong> header with the value <strong><code>"Bearer {YOUR_AUTH_KEY}"</code></strong>.</p>
<p>All authenticated endpoints are marked with a <code>requires authentication</code> badge in the documentation below.</p>
<p>You can retrieve your token by visiting your dashboard and clicking <b>Generate API token</b>.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-teams">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-teams">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "/api/teams" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "/api/teams"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    '/api/teams',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-teams">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 58
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;id&quot;: 1,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Avirons Bayonnais&quot;,
        &quot;nickname&quot;: &quot;AB&quot;,
        &quot;foundation&quot;: &quot;1906&quot;,
        &quot;stade&quot;: &quot;Jean Dauger&quot;,
        &quot;capacity&quot;: &quot;18069&quot;,
        &quot;website&quot;: &quot;www.abrugby.fr&quot;,
        &quot;facebook&quot;: &quot;https://www.facebook.com/avironbayonnaisrugbypro&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/avironrugbypro&quot;,
        &quot;instagram&quot;: &quot;https://www.instagram.com/avironrugbypro/&quot;,
        &quot;youtube&quot;: &quot;&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/1/1b/Logo_Aviron_Bayonnais_Rugby_-_2022.svg/1936px-Logo_Aviron_Bayonnais_Rugby_-_2022.svg.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Top 14&quot;,
                &quot;creation&quot;: &quot;1892&quot;,
                &quot;last_champion&quot;: 12,
                &quot;most_successfull&quot;: 12,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/3/3a/Top_14.svg/langfr-180px-Top_14.svg.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:45:08.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 1,
                    &quot;league_id&quot;: 1
                }
            },
            {
                &quot;id&quot;: 6,
                &quot;name&quot;: &quot;EPCR Challenge Cup&quot;,
                &quot;creation&quot;: &quot;1996&quot;,
                &quot;last_champion&quot;: 9,
                &quot;most_successfull&quot;: 5,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/6/69/Logo_Challenge_Cup_2021.png/180px-Logo_Challenge_Cup_2021.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:48:06.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 1,
                    &quot;league_id&quot;: 6
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 2,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Union Bordaux B&egrave;gles&quot;,
        &quot;nickname&quot;: &quot;UBB&quot;,
        &quot;foundation&quot;: &quot;2006&quot;,
        &quot;stade&quot;: &quot;Chaban-Delmas&quot;,
        &quot;capacity&quot;: &quot;34462&quot;,
        &quot;website&quot;: &quot;http://www.ubbrugby.com/&quot;,
        &quot;facebook&quot;: &quot;https://www.facebook.com/ubbrugby&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/ubbrugby&quot;,
        &quot;instagram&quot;: &quot;https://www.instagram.com/ubbrugby&quot;,
        &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UC0ofHgdtPGcNd21eVuBSWBQ&quot;,
        &quot;logo&quot;: &quot;https://www.ubbrugby.com/application/uploads/files/logo_UBB%20transparent.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Top 14&quot;,
                &quot;creation&quot;: &quot;1892&quot;,
                &quot;last_champion&quot;: 12,
                &quot;most_successfull&quot;: 12,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/3/3a/Top_14.svg/langfr-180px-Top_14.svg.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:45:08.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 2,
                    &quot;league_id&quot;: 1
                }
            },
            {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;Champion&#039;s Cup&quot;,
                &quot;creation&quot;: &quot;1995&quot;,
                &quot;last_champion&quot;: 11,
                &quot;most_successfull&quot;: 12,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/9/9a/Logo_Champions_Cup_2018.png/180px-Logo_Champions_Cup_2018.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:47:23.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 2,
                    &quot;league_id&quot;: 5
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 3,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Club Athl&eacute;tique Brive Corr&egrave;ze Limousin&quot;,
        &quot;nickname&quot;: &quot;CAB&quot;,
        &quot;foundation&quot;: &quot;1910&quot;,
        &quot;stade&quot;: &quot;Am&eacute;d&eacute;e- Domenech&quot;,
        &quot;capacity&quot;: &quot;13379&quot;,
        &quot;website&quot;: &quot;www.cabrive-rugby.com&quot;,
        &quot;facebook&quot;: &quot;https://www.facebook.com/CA-Brive-Rugby-Officiel-136407633069304/&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/CABCLRUGBY&quot;,
        &quot;instagram&quot;: &quot;https://www.instagram.com/cabriverugbyofficiel/&quot;,
        &quot;youtube&quot;: &quot;&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/5/56/Club_athl%C3%A9tique_Brive_Corr%C3%A8ze_Limousin_logo.svg/800px-Club_athl%C3%A9tique_Brive_Corr%C3%A8ze_Limousin_logo.svg.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Pro D2&quot;,
                &quot;creation&quot;: &quot;2000&quot;,
                &quot;last_champion&quot;: 28,
                &quot;most_successfull&quot;: 6,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/c/c5/ProD2_logo_2012.svg/langfr-150px-ProD2_logo_2012.svg.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:45:45.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 3,
                    &quot;league_id&quot;: 2
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 4,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Castres Olympique&quot;,
        &quot;nickname&quot;: &quot;CO&quot;,
        &quot;foundation&quot;: &quot;1906&quot;,
        &quot;stade&quot;: &quot;Pierre-Fabre&quot;,
        &quot;capacity&quot;: &quot;12500&quot;,
        &quot;website&quot;: &quot;www.castres-olympique.com&quot;,
        &quot;facebook&quot;: &quot;https://www.facebook.com/CastresOlympiqueOfficiel&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/CastresRugby&quot;,
        &quot;instagram&quot;: &quot;https://www.instagram.com/castresrugby/&quot;,
        &quot;youtube&quot;: &quot;&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/9/94/Castres_Olympique.svg/999px-Castres_Olympique.svg.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Top 14&quot;,
                &quot;creation&quot;: &quot;1892&quot;,
                &quot;last_champion&quot;: 12,
                &quot;most_successfull&quot;: 12,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/3/3a/Top_14.svg/langfr-180px-Top_14.svg.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:45:08.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 4,
                    &quot;league_id&quot;: 1
                }
            },
            {
                &quot;id&quot;: 6,
                &quot;name&quot;: &quot;EPCR Challenge Cup&quot;,
                &quot;creation&quot;: &quot;1996&quot;,
                &quot;last_champion&quot;: 9,
                &quot;most_successfull&quot;: 5,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/6/69/Logo_Challenge_Cup_2021.png/180px-Logo_Challenge_Cup_2021.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:48:06.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 4,
                    &quot;league_id&quot;: 6
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 5,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Association Sportive Montferrandaise Clermont Auvergne&quot;,
        &quot;nickname&quot;: &quot;ASM&quot;,
        &quot;foundation&quot;: &quot;1911&quot;,
        &quot;stade&quot;: &quot;Marcel Michelin&quot;,
        &quot;capacity&quot;: &quot;19372&quot;,
        &quot;website&quot;: &quot;www.asm-rugby.com&quot;,
        &quot;facebook&quot;: &quot;https://fr-fr.facebook.com/asm.clermont.auvergne/&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/ASMOfficiel&quot;,
        &quot;instagram&quot;: &quot;&quot;,
        &quot;youtube&quot;: &quot;&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/a/a8/Logo_ASM_Clermont_Auvergne_2019.svg/1200px-Logo_ASM_Clermont_Auvergne_2019.svg.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Top 14&quot;,
                &quot;creation&quot;: &quot;1892&quot;,
                &quot;last_champion&quot;: 12,
                &quot;most_successfull&quot;: 12,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/3/3a/Top_14.svg/langfr-180px-Top_14.svg.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:45:08.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 5,
                    &quot;league_id&quot;: 1
                }
            },
            {
                &quot;id&quot;: 6,
                &quot;name&quot;: &quot;EPCR Challenge Cup&quot;,
                &quot;creation&quot;: &quot;1996&quot;,
                &quot;last_champion&quot;: 9,
                &quot;most_successfull&quot;: 5,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/6/69/Logo_Challenge_Cup_2021.png/180px-Logo_Challenge_Cup_2021.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:48:06.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 5,
                    &quot;league_id&quot;: 6
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 6,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Lyon Olympique Universitaire&quot;,
        &quot;nickname&quot;: &quot;LOU&quot;,
        &quot;foundation&quot;: &quot;1896&quot;,
        &quot;stade&quot;: &quot;Matmut Stadium Gerland&quot;,
        &quot;capacity&quot;: &quot;35029&quot;,
        &quot;website&quot;: &quot;www.lourugby.fr&quot;,
        &quot;facebook&quot;: &quot;https://www.facebook.com/LOU.Rugby/&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/lelourugby?lang=fr&quot;,
        &quot;instagram&quot;: &quot;https://www.instagram.com/lourugby1896/?hl=fr&quot;,
        &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UCAwMdlmJy1PmeeXwdZuTjXw&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/2/25/Lyon_olympique_universitaire.svg/1200px-Lyon_olympique_universitaire.svg.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Top 14&quot;,
                &quot;creation&quot;: &quot;1892&quot;,
                &quot;last_champion&quot;: 12,
                &quot;most_successfull&quot;: 12,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/3/3a/Top_14.svg/langfr-180px-Top_14.svg.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:45:08.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 6,
                    &quot;league_id&quot;: 1
                }
            },
            {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;Champion&#039;s Cup&quot;,
                &quot;creation&quot;: &quot;1995&quot;,
                &quot;last_champion&quot;: 11,
                &quot;most_successfull&quot;: 12,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/9/9a/Logo_Champions_Cup_2018.png/180px-Logo_Champions_Cup_2018.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:47:23.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 6,
                    &quot;league_id&quot;: 5
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 7,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Montpellier H&eacute;rault Rugby&quot;,
        &quot;nickname&quot;: &quot;MHR&quot;,
        &quot;foundation&quot;: &quot;1986&quot;,
        &quot;stade&quot;: &quot;GGL Stadium&quot;,
        &quot;capacity&quot;: &quot;15697&quot;,
        &quot;website&quot;: &quot;www.montpellier-rugby.com&quot;,
        &quot;facebook&quot;: &quot;https://www.facebook.com/Montpellier.Rugby&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/MHR_officiel&quot;,
        &quot;instagram&quot;: &quot;https://www.instagram.com/mhr_officiel&quot;,
        &quot;youtube&quot;: &quot;https://www.youtube.com/user/montpellierrugby?feature=results_main&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/d/d9/Logo_Montpellier_H%C3%A9rault_rugby_2013.svg/1200px-Logo_Montpellier_H%C3%A9rault_rugby_2013.svg.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Top 14&quot;,
                &quot;creation&quot;: &quot;1892&quot;,
                &quot;last_champion&quot;: 12,
                &quot;most_successfull&quot;: 12,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/3/3a/Top_14.svg/langfr-180px-Top_14.svg.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:45:08.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 7,
                    &quot;league_id&quot;: 1
                }
            },
            {
                &quot;id&quot;: 6,
                &quot;name&quot;: &quot;EPCR Challenge Cup&quot;,
                &quot;creation&quot;: &quot;1996&quot;,
                &quot;last_champion&quot;: 9,
                &quot;most_successfull&quot;: 5,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/6/69/Logo_Challenge_Cup_2021.png/180px-Logo_Challenge_Cup_2021.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:48:06.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 7,
                    &quot;league_id&quot;: 6
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 8,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Section Paloise&quot;,
        &quot;nickname&quot;: &quot;SP&quot;,
        &quot;foundation&quot;: &quot;1902&quot;,
        &quot;stade&quot;: &quot;Stade du Hameau&quot;,
        &quot;capacity&quot;: &quot;14588&quot;,
        &quot;website&quot;: &quot;http://www.section-paloise.com/&quot;,
        &quot;facebook&quot;: &quot;https://www.facebook.com/SectionPaloiseBearnPyrenees&quot;,
        &quot;twitter&quot;: &quot;http://instagram.com/sectionpaloisebearnpyrenees&quot;,
        &quot;instagram&quot;: &quot;http://instagram.com/sectionpaloisebearnpyrenees&quot;,
        &quot;youtube&quot;: &quot;&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/9/91/Section_Paloise_logo.svg/1200px-Section_Paloise_logo.svg.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Top 14&quot;,
                &quot;creation&quot;: &quot;1892&quot;,
                &quot;last_champion&quot;: 12,
                &quot;most_successfull&quot;: 12,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/3/3a/Top_14.svg/langfr-180px-Top_14.svg.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:45:08.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 8,
                    &quot;league_id&quot;: 1
                }
            },
            {
                &quot;id&quot;: 6,
                &quot;name&quot;: &quot;EPCR Challenge Cup&quot;,
                &quot;creation&quot;: &quot;1996&quot;,
                &quot;last_champion&quot;: 9,
                &quot;most_successfull&quot;: 5,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/6/69/Logo_Challenge_Cup_2021.png/180px-Logo_Challenge_Cup_2021.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:48:06.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 8,
                    &quot;league_id&quot;: 6
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 9,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Rugby Club Toulonnais&quot;,
        &quot;nickname&quot;: &quot;RCT&quot;,
        &quot;foundation&quot;: &quot;1908&quot;,
        &quot;stade&quot;: &quot;Stade Mayol&quot;,
        &quot;capacity&quot;: &quot;17500&quot;,
        &quot;website&quot;: &quot;http://www.rctoulon.com/&quot;,
        &quot;facebook&quot;: &quot;https://www.facebook.com/RCTofficiel&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/rctofficiel&quot;,
        &quot;instagram&quot;: &quot;https://instagram.com/rctofficiel/&quot;,
        &quot;youtube&quot;: &quot;https://www.youtube.com/c/RCTRugbyClubToulonnais&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/5/5a/Logo_Rugby_club_toulonnais.svg/1200px-Logo_Rugby_club_toulonnais.svg.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Top 14&quot;,
                &quot;creation&quot;: &quot;1892&quot;,
                &quot;last_champion&quot;: 12,
                &quot;most_successfull&quot;: 12,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/3/3a/Top_14.svg/langfr-180px-Top_14.svg.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:45:08.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 9,
                    &quot;league_id&quot;: 1
                }
            },
            {
                &quot;id&quot;: 6,
                &quot;name&quot;: &quot;EPCR Challenge Cup&quot;,
                &quot;creation&quot;: &quot;1996&quot;,
                &quot;last_champion&quot;: 9,
                &quot;most_successfull&quot;: 5,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/6/69/Logo_Challenge_Cup_2021.png/180px-Logo_Challenge_Cup_2021.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:48:06.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 9,
                    &quot;league_id&quot;: 6
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 10,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Stade Fran&ccedil;ais Paris&quot;,
        &quot;nickname&quot;: &quot;SFP&quot;,
        &quot;foundation&quot;: &quot;1883&quot;,
        &quot;stade&quot;: &quot;Jean-Bouin&quot;,
        &quot;capacity&quot;: &quot;25000&quot;,
        &quot;website&quot;: &quot;www.stade.fr&quot;,
        &quot;facebook&quot;: &quot;https://www.facebook.com/SFPARIS&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/SFParisRugby&quot;,
        &quot;instagram&quot;: &quot;https://www.instagram.com/stade_francais_paris/&quot;,
        &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UC9HI0fd8SE_IfSaFkVKfPLA&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/0/0f/Logo_Stade_fran%C3%A7ais_PR_2018.svg/1200px-Logo_Stade_fran%C3%A7ais_PR_2018.svg.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Top 14&quot;,
                &quot;creation&quot;: &quot;1892&quot;,
                &quot;last_champion&quot;: 12,
                &quot;most_successfull&quot;: 12,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/3/3a/Top_14.svg/langfr-180px-Top_14.svg.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:45:08.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 10,
                    &quot;league_id&quot;: 1
                }
            },
            {
                &quot;id&quot;: 6,
                &quot;name&quot;: &quot;EPCR Challenge Cup&quot;,
                &quot;creation&quot;: &quot;1996&quot;,
                &quot;last_champion&quot;: 9,
                &quot;most_successfull&quot;: 5,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/6/69/Logo_Challenge_Cup_2021.png/180px-Logo_Challenge_Cup_2021.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:48:06.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 10,
                    &quot;league_id&quot;: 6
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 11,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Stade Rochelais&quot;,
        &quot;nickname&quot;: &quot;SR&quot;,
        &quot;foundation&quot;: &quot;1898&quot;,
        &quot;stade&quot;: &quot;Marcel Deflandre&quot;,
        &quot;capacity&quot;: &quot;16000&quot;,
        &quot;website&quot;: &quot;http://www.staderochelais.com/&quot;,
        &quot;facebook&quot;: &quot;https://www.facebook.com/staderochelais&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/staderochelais&quot;,
        &quot;instagram&quot;: &quot;https://www.instagram.com/staderochelais&quot;,
        &quot;youtube&quot;: &quot;https://www.dailymotion.com/staderochelais&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/4/44/Logo_Stade_rochelais_2016.svg/1594px-Logo_Stade_rochelais_2016.svg.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Top 14&quot;,
                &quot;creation&quot;: &quot;1892&quot;,
                &quot;last_champion&quot;: 12,
                &quot;most_successfull&quot;: 12,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/3/3a/Top_14.svg/langfr-180px-Top_14.svg.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:45:08.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 11,
                    &quot;league_id&quot;: 1
                }
            },
            {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;Champion&#039;s Cup&quot;,
                &quot;creation&quot;: &quot;1995&quot;,
                &quot;last_champion&quot;: 11,
                &quot;most_successfull&quot;: 12,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/9/9a/Logo_Champions_Cup_2018.png/180px-Logo_Champions_Cup_2018.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:47:23.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 11,
                    &quot;league_id&quot;: 5
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 12,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Stade Toulousain&quot;,
        &quot;nickname&quot;: &quot;ST&quot;,
        &quot;foundation&quot;: &quot;1907&quot;,
        &quot;stade&quot;: &quot;Ernest Wallon&quot;,
        &quot;capacity&quot;: &quot;19000&quot;,
        &quot;website&quot;: &quot;www.stadetoulousain.fr&quot;,
        &quot;facebook&quot;: &quot;https://fr-fr.facebook.com/StadeToulousainOfficiel&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/StadeToulousain&quot;,
        &quot;instagram&quot;: &quot;http://instagram.com/stadetoulousainrugby&quot;,
        &quot;youtube&quot;: &quot;https://www.youtube.com/stadetoulousain&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/0/01/Logo_Stade_Toulousain_Rugby.svg&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Top 14&quot;,
                &quot;creation&quot;: &quot;1892&quot;,
                &quot;last_champion&quot;: 12,
                &quot;most_successfull&quot;: 12,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/3/3a/Top_14.svg/langfr-180px-Top_14.svg.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:45:08.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 12,
                    &quot;league_id&quot;: 1
                }
            },
            {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;Champion&#039;s Cup&quot;,
                &quot;creation&quot;: &quot;1995&quot;,
                &quot;last_champion&quot;: 11,
                &quot;most_successfull&quot;: 12,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/9/9a/Logo_Champions_Cup_2018.png/180px-Logo_Champions_Cup_2018.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:47:23.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 12,
                    &quot;league_id&quot;: 5
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 13,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Union Sportive Arlequins Perpignanais&quot;,
        &quot;nickname&quot;: &quot;USAP&quot;,
        &quot;foundation&quot;: &quot;1902&quot;,
        &quot;stade&quot;: &quot;Aim&eacute;-Giral&quot;,
        &quot;capacity&quot;: &quot;14593&quot;,
        &quot;website&quot;: &quot;www.usap.fr&quot;,
        &quot;facebook&quot;: &quot;https://www.facebook.com/USAPOfficiel&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/usap_officiel&quot;,
        &quot;instagram&quot;: &quot;https://www.instagram.com/usapofficiel/&quot;,
        &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UCUZuZFU1VeHD9ZJJ3t3wnsQ&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/7/77/Logo_USA_Perpignan_2017.svg/1200px-Logo_USA_Perpignan_2017.svg.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Top 14&quot;,
                &quot;creation&quot;: &quot;1892&quot;,
                &quot;last_champion&quot;: 12,
                &quot;most_successfull&quot;: 12,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/3/3a/Top_14.svg/langfr-180px-Top_14.svg.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:45:08.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 13,
                    &quot;league_id&quot;: 1
                }
            },
            {
                &quot;id&quot;: 6,
                &quot;name&quot;: &quot;EPCR Challenge Cup&quot;,
                &quot;creation&quot;: &quot;1996&quot;,
                &quot;last_champion&quot;: 9,
                &quot;most_successfull&quot;: 5,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/6/69/Logo_Challenge_Cup_2021.png/180px-Logo_Challenge_Cup_2021.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:48:06.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 13,
                    &quot;league_id&quot;: 6
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 14,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Racing 92&quot;,
        &quot;nickname&quot;: &quot;R92&quot;,
        &quot;foundation&quot;: &quot;1890&quot;,
        &quot;stade&quot;: &quot;Paris La D&eacute;fense Ar&eacute;na&quot;,
        &quot;capacity&quot;: &quot;32000&quot;,
        &quot;website&quot;: &quot;www.racing92.fr&quot;,
        &quot;facebook&quot;: &quot;https://www.facebook.com/Racing92Officiel/&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/Racing92&quot;,
        &quot;instagram&quot;: &quot;https://www.instagram.com/Racing92/&quot;,
        &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UC4MQWtqrcD567vQIKyBJcsQ/&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/c/c7/Logo_Racing_92_2015.svg/640px-Logo_Racing_92_2015.svg.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Top 14&quot;,
                &quot;creation&quot;: &quot;1892&quot;,
                &quot;last_champion&quot;: 12,
                &quot;most_successfull&quot;: 12,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/3/3a/Top_14.svg/langfr-180px-Top_14.svg.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:45:08.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 14,
                    &quot;league_id&quot;: 1
                }
            },
            {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;Champion&#039;s Cup&quot;,
                &quot;creation&quot;: &quot;1995&quot;,
                &quot;last_champion&quot;: 11,
                &quot;most_successfull&quot;: 12,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/9/9a/Logo_Champions_Cup_2018.png/180px-Logo_Champions_Cup_2018.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:47:23.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 14,
                    &quot;league_id&quot;: 5
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 15,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Provence Rugby Aix-Marseille&quot;,
        &quot;nickname&quot;: &quot;PR&quot;,
        &quot;foundation&quot;: &quot;1970&quot;,
        &quot;stade&quot;: &quot;Maurice-David&quot;,
        &quot;capacity&quot;: &quot;6425&quot;,
        &quot;website&quot;: &quot;https://www.provencerugby.com/&quot;,
        &quot;facebook&quot;: &quot;https://www.facebook.com/ProvenceRugby&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/ProvenceRugby&quot;,
        &quot;instagram&quot;: &quot;https://instagram.com/provencerugbyofficiel/&quot;,
        &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UC6j-ShG-12kluScwHKoEhew&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/4/48/Logo_Provence_Rugby_-_2021.svg/1200px-Logo_Provence_Rugby_-_2021.svg.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Pro D2&quot;,
                &quot;creation&quot;: &quot;2000&quot;,
                &quot;last_champion&quot;: 28,
                &quot;most_successfull&quot;: 6,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/c/c5/ProD2_logo_2012.svg/langfr-150px-ProD2_logo_2012.svg.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:45:45.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 15,
                    &quot;league_id&quot;: 2
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 16,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Stade Aurillacois Cantal Auvergne&quot;,
        &quot;nickname&quot;: &quot;SACA&quot;,
        &quot;foundation&quot;: &quot;1904&quot;,
        &quot;stade&quot;: &quot;Jean-Alrice&quot;,
        &quot;capacity&quot;: &quot;7800&quot;,
        &quot;website&quot;: &quot;www.stade-aurillacois.fr&quot;,
        &quot;facebook&quot;: &quot;https://www.facebook.com/SArugbyofficiel/&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/SArugbyofficiel&quot;,
        &quot;instagram&quot;: &quot;https://www.instagram.com/sarugbyofficiel/&quot;,
        &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UCouXlRCs_l6lnTG1pTSQKaQ&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/c/c2/Logo_Stade_aurillacois_Cantal_Auvergne_2018.svg/800px-Logo_Stade_aurillacois_Cantal_Auvergne_2018.svg.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Pro D2&quot;,
                &quot;creation&quot;: &quot;2000&quot;,
                &quot;last_champion&quot;: 28,
                &quot;most_successfull&quot;: 6,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/c/c5/ProD2_logo_2012.svg/langfr-150px-ProD2_logo_2012.svg.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:45:45.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 16,
                    &quot;league_id&quot;: 2
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 17,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Sportive Union Agen Lot-et-Garonne&quot;,
        &quot;nickname&quot;: &quot;SUA&quot;,
        &quot;foundation&quot;: &quot;1905&quot;,
        &quot;stade&quot;: &quot;Armandie&quot;,
        &quot;capacity&quot;: &quot;14400&quot;,
        &quot;website&quot;: &quot;http://www.agen-rugby.com/&quot;,
        &quot;facebook&quot;: &quot;https://www.facebook.com/agenrugby/&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/agen_rugby&quot;,
        &quot;instagram&quot;: &quot;https://www.instagram.com/agen_rugby/&quot;,
        &quot;youtube&quot;: &quot;http://www.dailymotion.com/agenrugby&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/5/51/Logo_Sporting_Union_Agen_Lot-et-Garonne_2020.svg/674px-Logo_Sporting_Union_Agen_Lot-et-Garonne_2020.svg.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Pro D2&quot;,
                &quot;creation&quot;: &quot;2000&quot;,
                &quot;last_champion&quot;: 28,
                &quot;most_successfull&quot;: 6,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/c/c5/ProD2_logo_2012.svg/langfr-150px-ProD2_logo_2012.svg.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:45:45.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 17,
                    &quot;league_id&quot;: 2
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 18,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Soyaux Angoul&ecirc;me XV Charente&quot;,
        &quot;nickname&quot;: &quot;SA XV&quot;,
        &quot;foundation&quot;: &quot;2010&quot;,
        &quot;stade&quot;: &quot;Chanzy&quot;,
        &quot;capacity&quot;: &quot;8000&quot;,
        &quot;website&quot;: &quot;http://www.saxvcharente.fr/&quot;,
        &quot;facebook&quot;: &quot;https://www.facebook.com/saxvcharente.fr&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/saxv_charente&quot;,
        &quot;instagram&quot;: &quot;https://www.instagram.com/saxv_charente_rugby&quot;,
        &quot;youtube&quot;: &quot;&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/a/a5/Logo_Soyaux_Angoul%C3%AAme_XV_Charente_-_2017.svg/1200px-Logo_Soyaux_Angoul%C3%AAme_XV_Charente_-_2017.svg.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Pro D2&quot;,
                &quot;creation&quot;: &quot;2000&quot;,
                &quot;last_champion&quot;: 28,
                &quot;most_successfull&quot;: 6,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/c/c5/ProD2_logo_2012.svg/langfr-150px-ProD2_logo_2012.svg.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:45:45.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 18,
                    &quot;league_id&quot;: 2
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 19,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Association Sportive B&eacute;ziers H&eacute;rault&quot;,
        &quot;nickname&quot;: &quot;ASBH&quot;,
        &quot;foundation&quot;: &quot;1911&quot;,
        &quot;stade&quot;: &quot;Raoul-Barri&egrave;re&quot;,
        &quot;capacity&quot;: &quot;18255&quot;,
        &quot;website&quot;: &quot;https://www.asbh.net/&quot;,
        &quot;facebook&quot;: &quot;https://www.facebook.com/pages/ASBH-Officiel&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/ASBHOfficiel&quot;,
        &quot;instagram&quot;: &quot;https://www.instagram.com/asbhofficiel/&quot;,
        &quot;youtube&quot;: &quot;https://www.youtube.com/c/ASB%C3%A9ziersH%C3%A9raultRugby&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/1/14/Logo_AS_B%C3%A9ziers_H%C3%A9rault.svg/1200px-Logo_AS_B%C3%A9ziers_H%C3%A9rault.svg.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Pro D2&quot;,
                &quot;creation&quot;: &quot;2000&quot;,
                &quot;last_champion&quot;: 28,
                &quot;most_successfull&quot;: 6,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/c/c5/ProD2_logo_2012.svg/langfr-150px-ProD2_logo_2012.svg.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:45:45.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 19,
                    &quot;league_id&quot;: 2
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 20,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Biarritz Olympique&quot;,
        &quot;nickname&quot;: &quot;BO&quot;,
        &quot;foundation&quot;: &quot;1913&quot;,
        &quot;stade&quot;: &quot;Parc des sports Aguil&eacute;ra&quot;,
        &quot;capacity&quot;: &quot;13400&quot;,
        &quot;website&quot;: &quot;bo-pb.com&quot;,
        &quot;facebook&quot;: &quot;https://www.facebook.com/BOPB-page-officielle-208217155896387/&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/BOPBweb&quot;,
        &quot;instagram&quot;: &quot;https://www.instagram.com/bopb_officiel/?hl=fr&quot;,
        &quot;youtube&quot;: &quot;&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/0/05/Logo_Biarritz_Olympique_Pays_Basque_-_2016.svg/1200px-Logo_Biarritz_Olympique_Pays_Basque_-_2016.svg.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Pro D2&quot;,
                &quot;creation&quot;: &quot;2000&quot;,
                &quot;last_champion&quot;: 28,
                &quot;most_successfull&quot;: 6,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/c/c5/ProD2_logo_2012.svg/langfr-150px-ProD2_logo_2012.svg.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:45:45.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 20,
                    &quot;league_id&quot;: 2
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 21,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Union Sportive Carcasonnaise XV&quot;,
        &quot;nickname&quot;: &quot;USC XV&quot;,
        &quot;foundation&quot;: &quot;1899&quot;,
        &quot;stade&quot;: &quot;Albert-Domec&quot;,
        &quot;capacity&quot;: &quot;6500&quot;,
        &quot;website&quot;: &quot;http://www.uscarcassonne.com/&quot;,
        &quot;facebook&quot;: &quot;https://www.facebook.com/USCXV&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/USCXV&quot;,
        &quot;instagram&quot;: &quot;https://www.instagram.com/uscarcassonnexv&quot;,
        &quot;youtube&quot;: &quot;https://www.youtube.com/user/UsCarcassonne1&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/c/ca/Logo_Union_sportive_carcassonnaise_XV_2010.svg/1200px-Logo_Union_sportive_carcassonnaise_XV_2010.svg.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Pro D2&quot;,
                &quot;creation&quot;: &quot;2000&quot;,
                &quot;last_champion&quot;: 28,
                &quot;most_successfull&quot;: 6,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/c/c5/ProD2_logo_2012.svg/langfr-150px-ProD2_logo_2012.svg.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:45:45.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 21,
                    &quot;league_id&quot;: 2
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 22,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Colomiers Rugby&quot;,
        &quot;nickname&quot;: &quot;COL&quot;,
        &quot;foundation&quot;: &quot;1915&quot;,
        &quot;stade&quot;: &quot;Michel Bendichou&quot;,
        &quot;capacity&quot;: &quot;11000&quot;,
        &quot;website&quot;: &quot;http://www.colomiers-rugby.com/&quot;,
        &quot;facebook&quot;: &quot;https://www.facebook.com/ColomiersRugbyOfficiel/&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/ColomiersRugby&quot;,
        &quot;instagram&quot;: &quot;https://instagram.com/colomiersrugby&quot;,
        &quot;youtube&quot;: &quot;&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/e/e9/Logo_Colomiers_Rugby_2008.svg&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Pro D2&quot;,
                &quot;creation&quot;: &quot;2000&quot;,
                &quot;last_champion&quot;: 28,
                &quot;most_successfull&quot;: 6,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/c/c5/ProD2_logo_2012.svg/langfr-150px-ProD2_logo_2012.svg.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:45:45.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 22,
                    &quot;league_id&quot;: 2
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 23,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Football Club de Grenoble Rugby&quot;,
        &quot;nickname&quot;: &quot;FCGB&quot;,
        &quot;foundation&quot;: &quot;1892&quot;,
        &quot;stade&quot;: &quot;Stade des Alpes&quot;,
        &quot;capacity&quot;: &quot;20068&quot;,
        &quot;website&quot;: &quot;http://www.fcgrugby.com/&quot;,
        &quot;facebook&quot;: &quot;https://www.facebook.com/FCGrugby&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/fcgrugby?lang=fr&quot;,
        &quot;instagram&quot;: &quot;https://www.instagram.com/fcgrugby/&quot;,
        &quot;youtube&quot;: &quot;&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/4/46/Logo_FC_Grenoble_Rugby.svg&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Pro D2&quot;,
                &quot;creation&quot;: &quot;2000&quot;,
                &quot;last_champion&quot;: 28,
                &quot;most_successfull&quot;: 6,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/c/c5/ProD2_logo_2012.svg/langfr-150px-ProD2_logo_2012.svg.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:45:45.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 23,
                    &quot;league_id&quot;: 2
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 24,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Union Sportive Montabanaise XV&quot;,
        &quot;nickname&quot;: &quot;USM XV&quot;,
        &quot;foundation&quot;: &quot;1903&quot;,
        &quot;stade&quot;: &quot;Sapiac&quot;,
        &quot;capacity&quot;: &quot;1937&quot;,
        &quot;website&quot;: &quot;www.usmsapiac.fr&quot;,
        &quot;facebook&quot;: &quot;https://www.facebook.com/USMsapiac&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/UsmSapiacRugby&quot;,
        &quot;instagram&quot;: &quot;https://www.instagram.com/usm_sapiac/&quot;,
        &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UCBOhWG8te6jvgqnx-2JPwWA&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/9/92/Logo_US_Montalbanaise_-_2017.svg/1200px-Logo_US_Montalbanaise_-_2017.svg.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Pro D2&quot;,
                &quot;creation&quot;: &quot;2000&quot;,
                &quot;last_champion&quot;: 28,
                &quot;most_successfull&quot;: 6,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/c/c5/ProD2_logo_2012.svg/langfr-150px-ProD2_logo_2012.svg.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:45:45.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 24,
                    &quot;league_id&quot;: 2
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 25,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Stade Montois Rugby&quot;,
        &quot;nickname&quot;: &quot;SMR&quot;,
        &quot;foundation&quot;: &quot;1908&quot;,
        &quot;stade&quot;: &quot;Andr&eacute; et Guy Boniface&quot;,
        &quot;capacity&quot;: &quot;8250&quot;,
        &quot;website&quot;: &quot;http://www.stademontoisrugby.fr/&quot;,
        &quot;facebook&quot;: &quot;https://www.facebook.com/SM.Rugby.Pro/&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/SMR_Rugby&quot;,
        &quot;instagram&quot;: &quot;https://www.instagram.com/stademontoisrugby/?hl=fr&quot;,
        &quot;youtube&quot;: &quot;&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/Stade_Montois_Rugby_Pro.svg/1200px-Stade_Montois_Rugby_Pro.svg.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Pro D2&quot;,
                &quot;creation&quot;: &quot;2000&quot;,
                &quot;last_champion&quot;: 28,
                &quot;most_successfull&quot;: 6,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/c/c5/ProD2_logo_2012.svg/langfr-150px-ProD2_logo_2012.svg.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:45:45.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 25,
                    &quot;league_id&quot;: 2
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 26,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Rugby Massy Club Essonne&quot;,
        &quot;nickname&quot;: &quot;RCME&quot;,
        &quot;foundation&quot;: &quot;1971&quot;,
        &quot;stade&quot;: &quot;Jules Ladoum&egrave;gue&quot;,
        &quot;capacity&quot;: &quot;3000&quot;,
        &quot;website&quot;: &quot;rcmessonne.com&quot;,
        &quot;facebook&quot;: &quot;https://www.facebook.com/pages/Rugby-Club-Massy-Essonne&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/RCME91&quot;,
        &quot;instagram&quot;: &quot;https://www.instagram.com/rcme_officiel/&quot;,
        &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UCTYBfKIfruJbj8QRfL0PZ1w&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/0/0a/Logo_Rugby_Club_Massy_Essonne_-_2020.svg/800px-Logo_Rugby_Club_Massy_Essonne_-_2020.svg.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Pro D2&quot;,
                &quot;creation&quot;: &quot;2000&quot;,
                &quot;last_champion&quot;: 28,
                &quot;most_successfull&quot;: 6,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/c/c5/ProD2_logo_2012.svg/langfr-150px-ProD2_logo_2012.svg.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:45:45.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 26,
                    &quot;league_id&quot;: 2
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 27,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;USON Nevers Rugby&quot;,
        &quot;nickname&quot;: &quot;USON&quot;,
        &quot;foundation&quot;: &quot;1903&quot;,
        &quot;stade&quot;: &quot;Stade du Pr&eacute; Fleuri &quot;,
        &quot;capacity&quot;: &quot;7500&quot;,
        &quot;website&quot;: &quot;http://www.usonneversrugby.com/&quot;,
        &quot;facebook&quot;: &quot;https://www.facebook.com/UsonNeversRugby&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/usonneversrugby&quot;,
        &quot;instagram&quot;: &quot;https://www.instagram.com/usonneversrugby&quot;,
        &quot;youtube&quot;: &quot;https://www.youtube.com/user/UsonRugbyPlus&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/4/4a/Logo_USON_Nevers_2016.svg/782px-Logo_USON_Nevers_2016.svg.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Pro D2&quot;,
                &quot;creation&quot;: &quot;2000&quot;,
                &quot;last_champion&quot;: 28,
                &quot;most_successfull&quot;: 6,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/c/c5/ProD2_logo_2012.svg/langfr-150px-ProD2_logo_2012.svg.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:45:45.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 27,
                    &quot;league_id&quot;: 2
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 28,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Oyonnax Rugby&quot;,
        &quot;nickname&quot;: &quot;OYO&quot;,
        &quot;foundation&quot;: &quot;1909&quot;,
        &quot;stade&quot;: &quot;Charles Mathon&quot;,
        &quot;capacity&quot;: &quot;11400&quot;,
        &quot;website&quot;: &quot;http://www.oyonnaxrugby.com/&quot;,
        &quot;facebook&quot;: &quot;https://www.facebook.com/OyonnaxRugbyOfficiel&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/OyonnaxRugby&quot;,
        &quot;instagram&quot;: &quot;https://www.instagram.com/oyonnaxrugby/?hl=fr&quot;,
        &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UCf7BLip3jg_Vod8RRJa7T6Q&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/9/9d/Logo_Oyonnax_rugby_2018.svg/1200px-Logo_Oyonnax_rugby_2018.svg.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Top 14&quot;,
                &quot;creation&quot;: &quot;1892&quot;,
                &quot;last_champion&quot;: 12,
                &quot;most_successfull&quot;: 12,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/3/3a/Top_14.svg/langfr-180px-Top_14.svg.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:45:08.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 28,
                    &quot;league_id&quot;: 1
                }
            },
            {
                &quot;id&quot;: 6,
                &quot;name&quot;: &quot;EPCR Challenge Cup&quot;,
                &quot;creation&quot;: &quot;1996&quot;,
                &quot;last_champion&quot;: 9,
                &quot;most_successfull&quot;: 5,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/6/69/Logo_Challenge_Cup_2021.png/180px-Logo_Challenge_Cup_2021.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:48:06.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 28,
                    &quot;league_id&quot;: 6
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 29,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Rouen Normandie Rugby&quot;,
        &quot;nickname&quot;: &quot;RNR&quot;,
        &quot;foundation&quot;: &quot;2009&quot;,
        &quot;stade&quot;: &quot;Robert Diochon&quot;,
        &quot;capacity&quot;: &quot;12018&quot;,
        &quot;website&quot;: &quot;https://rouennormandierugby.fr/&quot;,
        &quot;facebook&quot;: &quot;https://www.facebook.com/RouenNormandieRugby/&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/rouenndierugby?lang=fr&quot;,
        &quot;instagram&quot;: &quot;https://www.instagram.com/rouen_normandie_rugby/&quot;,
        &quot;youtube&quot;: &quot;&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/8/8e/Logo_Rouen_Normandie_Rugby_-_2019.svg/1200px-Logo_Rouen_Normandie_Rugby_-_2019.svg.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Pro D2&quot;,
                &quot;creation&quot;: &quot;2000&quot;,
                &quot;last_champion&quot;: 28,
                &quot;most_successfull&quot;: 6,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/c/c5/ProD2_logo_2012.svg/langfr-150px-ProD2_logo_2012.svg.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:45:45.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 29,
                    &quot;league_id&quot;: 2
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 30,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Rugby Club Vannetais&quot;,
        &quot;nickname&quot;: &quot;RCV&quot;,
        &quot;foundation&quot;: &quot;1950&quot;,
        &quot;stade&quot;: &quot;La Rabine&quot;,
        &quot;capacity&quot;: &quot;11415&quot;,
        &quot;website&quot;: &quot;http://www.rugbyclubvannes.bzh/&quot;,
        &quot;facebook&quot;: &quot;https://www.facebook.com/RugbyClubVannes&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/RugbyClubVannes&quot;,
        &quot;instagram&quot;: &quot;https://www.instagram.com/rugbyclubvannes/&quot;,
        &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UCcmJvevXM_U1OWchJwOJxbQ&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/7/74/Logo_RC_Vannes_-_2022.svg/1200px-Logo_RC_Vannes_-_2022.svg.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Pro D2&quot;,
                &quot;creation&quot;: &quot;2000&quot;,
                &quot;last_champion&quot;: 28,
                &quot;most_successfull&quot;: 6,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/c/c5/ProD2_logo_2012.svg/langfr-150px-ProD2_logo_2012.svg.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:45:45.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 30,
                    &quot;league_id&quot;: 2
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 31,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Bath Rugby&quot;,
        &quot;nickname&quot;: &quot;BR&quot;,
        &quot;foundation&quot;: &quot;1865&quot;,
        &quot;stade&quot;: &quot;Recreation Ground&quot;,
        &quot;capacity&quot;: &quot;14000&quot;,
        &quot;website&quot;: &quot;https://www.bathrugby.com/&quot;,
        &quot;facebook&quot;: &quot;http://www.facebook.com/bathrugby&quot;,
        &quot;twitter&quot;: &quot;http://twitter.com/bathrugby&quot;,
        &quot;instagram&quot;: &quot;https://instagram.com/bathrugby/&quot;,
        &quot;youtube&quot;: &quot;https://www.youtube.com/user/BathRugbyTV&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/c/c3/Logo_Bath_Rugby_2014.svg/1200px-Logo_Bath_Rugby_2014.svg.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Premiership Rugby&quot;,
                &quot;creation&quot;: &quot;1987&quot;,
                &quot;last_champion&quot;: 41,
                &quot;most_successfull&quot;: 36,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/b/bd/Logo_Premiership_Rugby_2018.svg/langfr-180px-Logo_Premiership_Rugby_2018.svg.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:46:18.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 31,
                    &quot;league_id&quot;: 3
                }
            },
            {
                &quot;id&quot;: 6,
                &quot;name&quot;: &quot;EPCR Challenge Cup&quot;,
                &quot;creation&quot;: &quot;1996&quot;,
                &quot;last_champion&quot;: 9,
                &quot;most_successfull&quot;: 5,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/6/69/Logo_Challenge_Cup_2021.png/180px-Logo_Challenge_Cup_2021.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:48:06.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 31,
                    &quot;league_id&quot;: 6
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 32,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Bristol Bears&quot;,
        &quot;nickname&quot;: &quot;Bears&quot;,
        &quot;foundation&quot;: &quot;1888&quot;,
        &quot;stade&quot;: &quot;Ashton Gate Stadium&quot;,
        &quot;capacity&quot;: &quot;27000&quot;,
        &quot;website&quot;: &quot;https://www.bristolbearsrugby.com/&quot;,
        &quot;facebook&quot;: &quot;https://www.facebook.com/bristolbears&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/BristolBears&quot;,
        &quot;instagram&quot;: &quot;https://instagram.com/bristolbearsrfc/&quot;,
        &quot;youtube&quot;: &quot;https://www.youtube.com/c/Bristolbearstv&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/5/5a/Logo_Bristol_Bears_2018.svg/1200px-Logo_Bristol_Bears_2018.svg.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Premiership Rugby&quot;,
                &quot;creation&quot;: &quot;1987&quot;,
                &quot;last_champion&quot;: 41,
                &quot;most_successfull&quot;: 36,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/b/bd/Logo_Premiership_Rugby_2018.svg/langfr-180px-Logo_Premiership_Rugby_2018.svg.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:46:18.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 32,
                    &quot;league_id&quot;: 3
                }
            },
            {
                &quot;id&quot;: 6,
                &quot;name&quot;: &quot;EPCR Challenge Cup&quot;,
                &quot;creation&quot;: &quot;1996&quot;,
                &quot;last_champion&quot;: 9,
                &quot;most_successfull&quot;: 5,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/6/69/Logo_Challenge_Cup_2021.png/180px-Logo_Challenge_Cup_2021.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:48:06.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 32,
                    &quot;league_id&quot;: 6
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 33,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Exeter Rugby Club&quot;,
        &quot;nickname&quot;: &quot;Chiefs&quot;,
        &quot;foundation&quot;: &quot;1871&quot;,
        &quot;stade&quot;: &quot;Sandy Park &quot;,
        &quot;capacity&quot;: &quot;12500&quot;,
        &quot;website&quot;: &quot;http://www.exeterchiefs.co.uk/&quot;,
        &quot;facebook&quot;: &quot;https://facebook.com/ExeterChiefs&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/ExeterChiefs&quot;,
        &quot;instagram&quot;: &quot;https://instagram.com/officialexeterchiefs/&quot;,
        &quot;youtube&quot;: &quot;https://www.youtube.com/user/officialexeterchiefs&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/e/e7/Logo_Exeter_Chiefs_2022.svg&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Premiership Rugby&quot;,
                &quot;creation&quot;: &quot;1987&quot;,
                &quot;last_champion&quot;: 41,
                &quot;most_successfull&quot;: 36,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/b/bd/Logo_Premiership_Rugby_2018.svg/langfr-180px-Logo_Premiership_Rugby_2018.svg.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:46:18.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 33,
                    &quot;league_id&quot;: 3
                }
            },
            {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;Champion&#039;s Cup&quot;,
                &quot;creation&quot;: &quot;1995&quot;,
                &quot;last_champion&quot;: 11,
                &quot;most_successfull&quot;: 12,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/9/9a/Logo_Champions_Cup_2018.png/180px-Logo_Champions_Cup_2018.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:47:23.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 33,
                    &quot;league_id&quot;: 5
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 34,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Gloucester Rugby&quot;,
        &quot;nickname&quot;: &quot;Cherry and Whites&quot;,
        &quot;foundation&quot;: &quot;1873&quot;,
        &quot;stade&quot;: &quot;Kingsholm Stadium&quot;,
        &quot;capacity&quot;: &quot;16500&quot;,
        &quot;website&quot;: &quot;https://www.gloucesterrugby.co.uk/&quot;,
        &quot;facebook&quot;: &quot;https://facebook.com/GloucesterRugby&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/GloucesterRugby&quot;,
        &quot;instagram&quot;: &quot;https://instagram.com/officialGloucesterRugby&quot;,
        &quot;youtube&quot;: &quot;https://www.youtube.com/user/GloucesterRugbyTV&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/7/72/Logo_Gloucester_Rugby_2018.svg/1200px-Logo_Gloucester_Rugby_2018.svg.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Premiership Rugby&quot;,
                &quot;creation&quot;: &quot;1987&quot;,
                &quot;last_champion&quot;: 41,
                &quot;most_successfull&quot;: 36,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/b/bd/Logo_Premiership_Rugby_2018.svg/langfr-180px-Logo_Premiership_Rugby_2018.svg.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:46:18.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 34,
                    &quot;league_id&quot;: 3
                }
            },
            {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;Champion&#039;s Cup&quot;,
                &quot;creation&quot;: &quot;1995&quot;,
                &quot;last_champion&quot;: 11,
                &quot;most_successfull&quot;: 12,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/9/9a/Logo_Champions_Cup_2018.png/180px-Logo_Champions_Cup_2018.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:47:23.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 34,
                    &quot;league_id&quot;: 5
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 35,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Harlequins Football Club&quot;,
        &quot;nickname&quot;: &quot;Quins&quot;,
        &quot;foundation&quot;: &quot;1866&quot;,
        &quot;stade&quot;: &quot;The Stoop&quot;,
        &quot;capacity&quot;: &quot;14800&quot;,
        &quot;website&quot;: &quot;https://www.quins.co.uk/&quot;,
        &quot;facebook&quot;: &quot;https://en-gb.facebook.com/harlequins/&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/Harlequins&quot;,
        &quot;instagram&quot;: &quot;https://www.instagram.com/harlequins&quot;,
        &quot;youtube&quot;: &quot;&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/3/34/Logo_Harlequin_Football_Club_2011.svg/1200px-Logo_Harlequin_Football_Club_2011.svg.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Premiership Rugby&quot;,
                &quot;creation&quot;: &quot;1987&quot;,
                &quot;last_champion&quot;: 41,
                &quot;most_successfull&quot;: 36,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/b/bd/Logo_Premiership_Rugby_2018.svg/langfr-180px-Logo_Premiership_Rugby_2018.svg.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:46:18.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 35,
                    &quot;league_id&quot;: 3
                }
            },
            {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;Champion&#039;s Cup&quot;,
                &quot;creation&quot;: &quot;1995&quot;,
                &quot;last_champion&quot;: 11,
                &quot;most_successfull&quot;: 12,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/9/9a/Logo_Champions_Cup_2018.png/180px-Logo_Champions_Cup_2018.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:47:23.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 35,
                    &quot;league_id&quot;: 5
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 36,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Leicester Football Club&quot;,
        &quot;nickname&quot;: &quot;Tigers&quot;,
        &quot;foundation&quot;: &quot;1880&quot;,
        &quot;stade&quot;: &quot;Welford Road Staidum&quot;,
        &quot;capacity&quot;: &quot;24000&quot;,
        &quot;website&quot;: &quot;http://www.tigers.co.uk/home.php&quot;,
        &quot;facebook&quot;: &quot;https://www.facebook.com/leicestertigers&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/leicestertigers&quot;,
        &quot;instagram&quot;: &quot;https://www.instagram.com/leicestertigers/&quot;,
        &quot;youtube&quot;: &quot;https://www.youtube.com/user/LeicesterTigersLTTV&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/3/34/Logo_Harlequin_Football_Club_2011.svg/1200px-Logo_Harlequin_Football_Club_2011.svg.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Premiership Rugby&quot;,
                &quot;creation&quot;: &quot;1987&quot;,
                &quot;last_champion&quot;: 41,
                &quot;most_successfull&quot;: 36,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/b/bd/Logo_Premiership_Rugby_2018.svg/langfr-180px-Logo_Premiership_Rugby_2018.svg.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:46:18.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 36,
                    &quot;league_id&quot;: 3
                }
            },
            {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;Champion&#039;s Cup&quot;,
                &quot;creation&quot;: &quot;1995&quot;,
                &quot;last_champion&quot;: 11,
                &quot;most_successfull&quot;: 12,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/9/9a/Logo_Champions_Cup_2018.png/180px-Logo_Champions_Cup_2018.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:47:23.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 36,
                    &quot;league_id&quot;: 5
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 37,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;London Irish Football Club&quot;,
        &quot;nickname&quot;: &quot;The Exiles&quot;,
        &quot;foundation&quot;: &quot;1898&quot;,
        &quot;stade&quot;: &quot;Gtech Community Stadium&quot;,
        &quot;capacity&quot;: &quot;17250&quot;,
        &quot;website&quot;: &quot;www.london-irish.com&quot;,
        &quot;facebook&quot;: &quot;https://www.facebook.com/LIRFC&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/londonirish&quot;,
        &quot;instagram&quot;: &quot;https://www.instagram.com/londonirish1898/&quot;,
        &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UCQYMvGMgRj8Yjbdv72hOgXA&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/9/90/Logo_London_Irish_2019.svg/1200px-Logo_London_Irish_2019.svg.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Premiership Rugby&quot;,
                &quot;creation&quot;: &quot;1987&quot;,
                &quot;last_champion&quot;: 41,
                &quot;most_successfull&quot;: 36,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/b/bd/Logo_Premiership_Rugby_2018.svg/langfr-180px-Logo_Premiership_Rugby_2018.svg.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:46:18.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 37,
                    &quot;league_id&quot;: 3
                }
            },
            {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;Champion&#039;s Cup&quot;,
                &quot;creation&quot;: &quot;1995&quot;,
                &quot;last_champion&quot;: 11,
                &quot;most_successfull&quot;: 12,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/9/9a/Logo_Champions_Cup_2018.png/180px-Logo_Champions_Cup_2018.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:47:23.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 37,
                    &quot;league_id&quot;: 5
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 38,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Newcastle Falcons&quot;,
        &quot;nickname&quot;: &quot;Falcons&quot;,
        &quot;foundation&quot;: &quot;1877&quot;,
        &quot;stade&quot;: &quot;Kingston Park&quot;,
        &quot;capacity&quot;: &quot;10200&quot;,
        &quot;website&quot;: &quot;http://www.newcastlefalcons.co.uk&quot;,
        &quot;facebook&quot;: &quot;https://www.facebook.com/newcastle.falcons&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/FalconsRugby&quot;,
        &quot;instagram&quot;: &quot;&quot;,
        &quot;youtube&quot;: &quot;https://www.youtube.com/user/NewcastleFalcons1&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/d/d7/Logo_Newcastle_Falcons.svg/1200px-Logo_Newcastle_Falcons.svg.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Premiership Rugby&quot;,
                &quot;creation&quot;: &quot;1987&quot;,
                &quot;last_champion&quot;: 41,
                &quot;most_successfull&quot;: 36,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/b/bd/Logo_Premiership_Rugby_2018.svg/langfr-180px-Logo_Premiership_Rugby_2018.svg.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:46:18.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 38,
                    &quot;league_id&quot;: 3
                }
            },
            {
                &quot;id&quot;: 6,
                &quot;name&quot;: &quot;EPCR Challenge Cup&quot;,
                &quot;creation&quot;: &quot;1996&quot;,
                &quot;last_champion&quot;: 9,
                &quot;most_successfull&quot;: 5,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/6/69/Logo_Challenge_Cup_2021.png/180px-Logo_Challenge_Cup_2021.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:48:06.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 38,
                    &quot;league_id&quot;: 6
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 39,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Northampton Saints Rugby Football Club&quot;,
        &quot;nickname&quot;: &quot;Saints&quot;,
        &quot;foundation&quot;: &quot;1880&quot;,
        &quot;stade&quot;: &quot;Franklin&#039;s Garden&quot;,
        &quot;capacity&quot;: &quot;15500&quot;,
        &quot;website&quot;: &quot;http://www.northamptonsaints.co.uk/&quot;,
        &quot;facebook&quot;: &quot;https://facebook.com/northamptonsaints&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/SaintsRugby&quot;,
        &quot;instagram&quot;: &quot;https://instagram.com/northamptonsaints&quot;,
        &quot;youtube&quot;: &quot;https://youtube.com/user/TheSaintsTV&quot;,
        &quot;logo&quot;: &quot;https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNmxktUnK8vEBaJUhNjtafLRLw7s7PqlxiDBWzkCo&amp;s&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Premiership Rugby&quot;,
                &quot;creation&quot;: &quot;1987&quot;,
                &quot;last_champion&quot;: 41,
                &quot;most_successfull&quot;: 36,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/b/bd/Logo_Premiership_Rugby_2018.svg/langfr-180px-Logo_Premiership_Rugby_2018.svg.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:46:18.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 39,
                    &quot;league_id&quot;: 3
                }
            },
            {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;Champion&#039;s Cup&quot;,
                &quot;creation&quot;: &quot;1995&quot;,
                &quot;last_champion&quot;: 11,
                &quot;most_successfull&quot;: 12,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/9/9a/Logo_Champions_Cup_2018.png/180px-Logo_Champions_Cup_2018.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:47:23.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 39,
                    &quot;league_id&quot;: 5
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 40,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Sale Sharks Rugby Union Football Club&quot;,
        &quot;nickname&quot;: &quot;Sharks&quot;,
        &quot;foundation&quot;: &quot;1861&quot;,
        &quot;stade&quot;: &quot;AJ Bell Stadium&quot;,
        &quot;capacity&quot;: &quot;12000&quot;,
        &quot;website&quot;: &quot;https://www.salesharks.com/&quot;,
        &quot;facebook&quot;: &quot;https://www.facebook.com/SaleSharksRugby/&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/SaleSharksRugby&quot;,
        &quot;instagram&quot;: &quot;https://www.instagram.com/salesharks/&quot;,
        &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UC_k3xuhlC_jBgfpJdMqAKxw&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/3/34/Sale_Sharks_%28logo%29.svg/1200px-Sale_Sharks_%28logo%29.svg.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Premiership Rugby&quot;,
                &quot;creation&quot;: &quot;1987&quot;,
                &quot;last_champion&quot;: 41,
                &quot;most_successfull&quot;: 36,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/b/bd/Logo_Premiership_Rugby_2018.svg/langfr-180px-Logo_Premiership_Rugby_2018.svg.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:46:18.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 40,
                    &quot;league_id&quot;: 3
                }
            },
            {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;Champion&#039;s Cup&quot;,
                &quot;creation&quot;: &quot;1995&quot;,
                &quot;last_champion&quot;: 11,
                &quot;most_successfull&quot;: 12,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/9/9a/Logo_Champions_Cup_2018.png/180px-Logo_Champions_Cup_2018.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:47:23.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 40,
                    &quot;league_id&quot;: 5
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 41,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Saracens Football Club&quot;,
        &quot;nickname&quot;: &quot;Sarries&quot;,
        &quot;foundation&quot;: &quot;1876&quot;,
        &quot;stade&quot;: &quot;StoneX Stadium&quot;,
        &quot;capacity&quot;: &quot;15000&quot;,
        &quot;website&quot;: &quot;http://www.saracens.com/&quot;,
        &quot;facebook&quot;: &quot;https://www.facebook.com/SaracensOfficial&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/Saracens&quot;,
        &quot;instagram&quot;: &quot;https://www.instagram.com/saracensofficial&quot;,
        &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UCHZjhtppDSbFEXWA80d5WBw&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/0/05/Logo_Saracens_2021.svg/1200px-Logo_Saracens_2021.svg.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Premiership Rugby&quot;,
                &quot;creation&quot;: &quot;1987&quot;,
                &quot;last_champion&quot;: 41,
                &quot;most_successfull&quot;: 36,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/b/bd/Logo_Premiership_Rugby_2018.svg/langfr-180px-Logo_Premiership_Rugby_2018.svg.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:46:18.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 41,
                    &quot;league_id&quot;: 3
                }
            },
            {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;Champion&#039;s Cup&quot;,
                &quot;creation&quot;: &quot;1995&quot;,
                &quot;last_champion&quot;: 11,
                &quot;most_successfull&quot;: 12,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/9/9a/Logo_Champions_Cup_2018.png/180px-Logo_Champions_Cup_2018.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:47:23.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 41,
                    &quot;league_id&quot;: 5
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 42,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Bulls&quot;,
        &quot;nickname&quot;: &quot;The Bulls&quot;,
        &quot;foundation&quot;: &quot;1997&quot;,
        &quot;stade&quot;: &quot;Lotus Versfeld&quot;,
        &quot;capacity&quot;: &quot;51762&quot;,
        &quot;website&quot;: &quot;bullsrugby.co.za&quot;,
        &quot;facebook&quot;: &quot;https://www.facebook.com/BullsOfficial&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/BlueBullsRugby&quot;,
        &quot;instagram&quot;: &quot;https://www.instagram.com/blue_bulls_official/&quot;,
        &quot;youtube&quot;: &quot;https://www.youtube.com/user/VodacomBulls/feed&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/commons/5/55/Bulls-logo.jpg&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 4,
                &quot;name&quot;: &quot;United Rugby Championship&quot;,
                &quot;creation&quot;: &quot;2001&quot;,
                &quot;last_champion&quot;: 50,
                &quot;most_successfull&quot;: 54,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/d/db/Logo_United_Rugby_Championship_2021.png/180px-Logo_United_Rugby_Championship_2021.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:46:41.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 42,
                    &quot;league_id&quot;: 4
                }
            },
            {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;Champion&#039;s Cup&quot;,
                &quot;creation&quot;: &quot;1995&quot;,
                &quot;last_champion&quot;: 11,
                &quot;most_successfull&quot;: 12,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/9/9a/Logo_Champions_Cup_2018.png/180px-Logo_Champions_Cup_2018.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:47:23.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 42,
                    &quot;league_id&quot;: 5
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 43,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Cardiff Rugby&quot;,
        &quot;nickname&quot;: &quot;Blues&quot;,
        &quot;foundation&quot;: &quot;2003&quot;,
        &quot;stade&quot;: &quot;Cardiff Arms Park&quot;,
        &quot;capacity&quot;: &quot;12500&quot;,
        &quot;website&quot;: &quot;https://www.cardiffrugby.wales/&quot;,
        &quot;facebook&quot;: &quot;https://www.facebook.com/cardiffrugby1876&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/cardiff_rugby&quot;,
        &quot;instagram&quot;: &quot;https://www.instagram.com/cardiff.rugby/&quot;,
        &quot;youtube&quot;: &quot;&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/8/85/Logo_Cardiff_Rugby_2021.svg/1200px-Logo_Cardiff_Rugby_2021.svg.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 4,
                &quot;name&quot;: &quot;United Rugby Championship&quot;,
                &quot;creation&quot;: &quot;2001&quot;,
                &quot;last_champion&quot;: 50,
                &quot;most_successfull&quot;: 54,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/d/db/Logo_United_Rugby_Championship_2021.png/180px-Logo_United_Rugby_Championship_2021.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:46:41.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 43,
                    &quot;league_id&quot;: 4
                }
            },
            {
                &quot;id&quot;: 6,
                &quot;name&quot;: &quot;EPCR Challenge Cup&quot;,
                &quot;creation&quot;: &quot;1996&quot;,
                &quot;last_champion&quot;: 9,
                &quot;most_successfull&quot;: 5,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/6/69/Logo_Challenge_Cup_2021.png/180px-Logo_Challenge_Cup_2021.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:48:06.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 43,
                    &quot;league_id&quot;: 6
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 44,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Connacht Rugby&quot;,
        &quot;nickname&quot;: &quot;Greens&quot;,
        &quot;foundation&quot;: &quot;1885&quot;,
        &quot;stade&quot;: &quot;Galway Sportsground&quot;,
        &quot;capacity&quot;: &quot;8100&quot;,
        &quot;website&quot;: &quot;https://www.connachtrugby.ie/&quot;,
        &quot;facebook&quot;: &quot;https://www.facebook.com/ConnachtRugby&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/connachtrugby&quot;,
        &quot;instagram&quot;: &quot;https://www.instagram.com/connachtrugby/&quot;,
        &quot;youtube&quot;: &quot;&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/8/85/Logo_Cardiff_Rugby_2021.svg/1200px-Logo_Cardiff_Rugby_2021.svg.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 4,
                &quot;name&quot;: &quot;United Rugby Championship&quot;,
                &quot;creation&quot;: &quot;2001&quot;,
                &quot;last_champion&quot;: 50,
                &quot;most_successfull&quot;: 54,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/d/db/Logo_United_Rugby_Championship_2021.png/180px-Logo_United_Rugby_Championship_2021.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:46:41.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 44,
                    &quot;league_id&quot;: 4
                }
            },
            {
                &quot;id&quot;: 6,
                &quot;name&quot;: &quot;EPCR Challenge Cup&quot;,
                &quot;creation&quot;: &quot;1996&quot;,
                &quot;last_champion&quot;: 9,
                &quot;most_successfull&quot;: 5,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/6/69/Logo_Challenge_Cup_2021.png/180px-Logo_Challenge_Cup_2021.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:48:06.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 44,
                    &quot;league_id&quot;: 6
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 45,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Edimbourg Rugby&quot;,
        &quot;nickname&quot;: &quot;Gunners&quot;,
        &quot;foundation&quot;: &quot;1872&quot;,
        &quot;stade&quot;: &quot;Murrayfield&quot;,
        &quot;capacity&quot;: &quot;67000&quot;,
        &quot;website&quot;: &quot;https://www.edinburghrugby.org/&quot;,
        &quot;facebook&quot;: &quot;https://www.facebook.com/EdinburghRugby&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/EdinburghRugby&quot;,
        &quot;instagram&quot;: &quot;https://www.instagram.com/edinburghrugby&quot;,
        &quot;youtube&quot;: &quot;https://www.youtube.com/EdinburghRugbyTV&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/8/85/Logo_Cardiff_Rugby_2021.svg/1200px-Logo_Cardiff_Rugby_2021.svg.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 4,
                &quot;name&quot;: &quot;United Rugby Championship&quot;,
                &quot;creation&quot;: &quot;2001&quot;,
                &quot;last_champion&quot;: 50,
                &quot;most_successfull&quot;: 54,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/d/db/Logo_United_Rugby_Championship_2021.png/180px-Logo_United_Rugby_Championship_2021.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:46:41.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 45,
                    &quot;league_id&quot;: 4
                }
            },
            {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;Champion&#039;s Cup&quot;,
                &quot;creation&quot;: &quot;1995&quot;,
                &quot;last_champion&quot;: 11,
                &quot;most_successfull&quot;: 12,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/9/9a/Logo_Champions_Cup_2018.png/180px-Logo_Champions_Cup_2018.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:47:23.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 45,
                    &quot;league_id&quot;: 5
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 46,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Glasgow Warriors&quot;,
        &quot;nickname&quot;: &quot;Warriors&quot;,
        &quot;foundation&quot;: &quot;1872&quot;,
        &quot;stade&quot;: &quot;Scotstun Stadium&quot;,
        &quot;capacity&quot;: &quot;11000&quot;,
        &quot;website&quot;: &quot;http://www.glasgowwarriors.org/&quot;,
        &quot;facebook&quot;: &quot;https://www.facebook.com/GlasgowWarriors&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/GlasgowWarriors&quot;,
        &quot;instagram&quot;: &quot;https://www.instagram.com/glasgowwarriors&quot;,
        &quot;youtube&quot;: &quot;https://www.youtube.com/glasgowwarriors&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/7/75/Logo_Glasgow_Warriors_2019.svg/1200px-Logo_Glasgow_Warriors_2019.svg.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 4,
                &quot;name&quot;: &quot;United Rugby Championship&quot;,
                &quot;creation&quot;: &quot;2001&quot;,
                &quot;last_champion&quot;: 50,
                &quot;most_successfull&quot;: 54,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/d/db/Logo_United_Rugby_Championship_2021.png/180px-Logo_United_Rugby_Championship_2021.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:46:41.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 46,
                    &quot;league_id&quot;: 4
                }
            },
            {
                &quot;id&quot;: 6,
                &quot;name&quot;: &quot;EPCR Challenge Cup&quot;,
                &quot;creation&quot;: &quot;1996&quot;,
                &quot;last_champion&quot;: 9,
                &quot;most_successfull&quot;: 5,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/6/69/Logo_Challenge_Cup_2021.png/180px-Logo_Challenge_Cup_2021.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:48:06.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 46,
                    &quot;league_id&quot;: 6
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 47,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Leinster Rugby&quot;,
        &quot;nickname&quot;: &quot;Boys in blue&quot;,
        &quot;foundation&quot;: &quot;1875&quot;,
        &quot;stade&quot;: &quot;RDS Arena&quot;,
        &quot;capacity&quot;: &quot;18500&quot;,
        &quot;website&quot;: &quot;http://www.leinsterrugby.ie/&quot;,
        &quot;facebook&quot;: &quot;https://www.facebook.com/leinsterrugby/?fref=ts&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/leinsterrugby&quot;,
        &quot;instagram&quot;: &quot;https://www.instagram.com/leinsterrugby/?hl=en&quot;,
        &quot;youtube&quot;: &quot;https://www.youtube.com/user/LeinsterrugbyTV&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/2/2c/Logo_Leinster_Rugby.svg/1200px-Logo_Leinster_Rugby.svg.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 4,
                &quot;name&quot;: &quot;United Rugby Championship&quot;,
                &quot;creation&quot;: &quot;2001&quot;,
                &quot;last_champion&quot;: 50,
                &quot;most_successfull&quot;: 54,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/d/db/Logo_United_Rugby_Championship_2021.png/180px-Logo_United_Rugby_Championship_2021.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:46:41.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 47,
                    &quot;league_id&quot;: 4
                }
            },
            {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;Champion&#039;s Cup&quot;,
                &quot;creation&quot;: &quot;1995&quot;,
                &quot;last_champion&quot;: 11,
                &quot;most_successfull&quot;: 12,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/9/9a/Logo_Champions_Cup_2018.png/180px-Logo_Champions_Cup_2018.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:47:23.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 47,
                    &quot;league_id&quot;: 5
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 48,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Lions&quot;,
        &quot;nickname&quot;: &quot;Cats&quot;,
        &quot;foundation&quot;: &quot;1996&quot;,
        &quot;stade&quot;: &quot;Ellis Park Stadium&quot;,
        &quot;capacity&quot;: &quot;59611&quot;,
        &quot;website&quot;: &quot;http://www.lionsrugby.co.za/&quot;,
        &quot;facebook&quot;: &quot;https://www.facebook.com/lionsrugbyco/&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/LionsRugbyCo&quot;,
        &quot;instagram&quot;: &quot;https://twitter.com/LionsRugbyCo&quot;,
        &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UCdddB27Aoxea_QS0EyPJoRQ&quot;,
        &quot;logo&quot;: &quot;https://assets.stickpng.com/images/5ae2e50233b73fa43b1a8986.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 4,
                &quot;name&quot;: &quot;United Rugby Championship&quot;,
                &quot;creation&quot;: &quot;2001&quot;,
                &quot;last_champion&quot;: 50,
                &quot;most_successfull&quot;: 54,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/d/db/Logo_United_Rugby_Championship_2021.png/180px-Logo_United_Rugby_Championship_2021.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:46:41.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 48,
                    &quot;league_id&quot;: 4
                }
            },
            {
                &quot;id&quot;: 6,
                &quot;name&quot;: &quot;EPCR Challenge Cup&quot;,
                &quot;creation&quot;: &quot;1996&quot;,
                &quot;last_champion&quot;: 9,
                &quot;most_successfull&quot;: 5,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/6/69/Logo_Challenge_Cup_2021.png/180px-Logo_Challenge_Cup_2021.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:48:06.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 48,
                    &quot;league_id&quot;: 6
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 49,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Scarlets&quot;,
        &quot;nickname&quot;: &quot;Scarlets&quot;,
        &quot;foundation&quot;: &quot;2003&quot;,
        &quot;stade&quot;: &quot;Parc y Scarlets&quot;,
        &quot;capacity&quot;: &quot;14870&quot;,
        &quot;website&quot;: &quot;https://www.scarlets.wales/&quot;,
        &quot;facebook&quot;: &quot;https://www.facebook.com/OfficialScarlets/&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/scarlets_rugby&quot;,
        &quot;instagram&quot;: &quot;https://www.instagram.com/scarlets_rugby/&quot;,
        &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UCSpQ51CzUYp_ambKRD7fDCg&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/0/03/Logo_Scarlets_2008.svg/1200px-Logo_Scarlets_2008.svg.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 4,
                &quot;name&quot;: &quot;United Rugby Championship&quot;,
                &quot;creation&quot;: &quot;2001&quot;,
                &quot;last_champion&quot;: 50,
                &quot;most_successfull&quot;: 54,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/d/db/Logo_United_Rugby_Championship_2021.png/180px-Logo_United_Rugby_Championship_2021.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:46:41.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 49,
                    &quot;league_id&quot;: 4
                }
            },
            {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;Champion&#039;s Cup&quot;,
                &quot;creation&quot;: &quot;1995&quot;,
                &quot;last_champion&quot;: 11,
                &quot;most_successfull&quot;: 12,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/9/9a/Logo_Champions_Cup_2018.png/180px-Logo_Champions_Cup_2018.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:47:23.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 49,
                    &quot;league_id&quot;: 5
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 50,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Munster Rugby&quot;,
        &quot;nickname&quot;: &quot;Red Army&quot;,
        &quot;foundation&quot;: &quot;1879&quot;,
        &quot;stade&quot;: &quot;Thomond Park&quot;,
        &quot;capacity&quot;: &quot;26500&quot;,
        &quot;website&quot;: &quot;http://www.munsterrugby.ie/&quot;,
        &quot;facebook&quot;: &quot;&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/MunsterRugby&quot;,
        &quot;instagram&quot;: &quot;https://twitter.com/MunsterRugby&quot;,
        &quot;youtube&quot;: &quot;https://www.youtube.com/user/MunsterView&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/9/94/Munster_Rugby_%28logo%29.svg/1200px-Munster_Rugby_%28logo%29.svg.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 4,
                &quot;name&quot;: &quot;United Rugby Championship&quot;,
                &quot;creation&quot;: &quot;2001&quot;,
                &quot;last_champion&quot;: 50,
                &quot;most_successfull&quot;: 54,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/d/db/Logo_United_Rugby_Championship_2021.png/180px-Logo_United_Rugby_Championship_2021.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:46:41.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 50,
                    &quot;league_id&quot;: 4
                }
            },
            {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;Champion&#039;s Cup&quot;,
                &quot;creation&quot;: &quot;1995&quot;,
                &quot;last_champion&quot;: 11,
                &quot;most_successfull&quot;: 12,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/9/9a/Logo_Champions_Cup_2018.png/180px-Logo_Champions_Cup_2018.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:47:23.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 50,
                    &quot;league_id&quot;: 5
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 51,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Dragons RFC&quot;,
        &quot;nickname&quot;: &quot;Dragons&quot;,
        &quot;foundation&quot;: &quot;2003&quot;,
        &quot;stade&quot;: &quot;Rodney Parade&quot;,
        &quot;capacity&quot;: &quot;11676&quot;,
        &quot;website&quot;: &quot;https://www.dragonsrugby.wales/&quot;,
        &quot;facebook&quot;: &quot;https://www.facebook.com/dragonsrfc.wales/&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/dragonsrugby&quot;,
        &quot;instagram&quot;: &quot;https://twitter.com/dragonsrugby&quot;,
        &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UCdB_8F9Yqur14jXdSzxyQeA&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/d/d1/Logo_Dragons_RFC_2022.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 4,
                &quot;name&quot;: &quot;United Rugby Championship&quot;,
                &quot;creation&quot;: &quot;2001&quot;,
                &quot;last_champion&quot;: 50,
                &quot;most_successfull&quot;: 54,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/d/db/Logo_United_Rugby_Championship_2021.png/180px-Logo_United_Rugby_Championship_2021.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:46:41.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 51,
                    &quot;league_id&quot;: 4
                }
            },
            {
                &quot;id&quot;: 6,
                &quot;name&quot;: &quot;EPCR Challenge Cup&quot;,
                &quot;creation&quot;: &quot;1996&quot;,
                &quot;last_champion&quot;: 9,
                &quot;most_successfull&quot;: 5,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/6/69/Logo_Challenge_Cup_2021.png/180px-Logo_Challenge_Cup_2021.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:48:06.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 51,
                    &quot;league_id&quot;: 6
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 52,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Ospreys&quot;,
        &quot;nickname&quot;: &quot;Y Gweilch&quot;,
        &quot;foundation&quot;: &quot;2003&quot;,
        &quot;stade&quot;: &quot;Liberty Stadium&quot;,
        &quot;capacity&quot;: &quot;20000&quot;,
        &quot;website&quot;: &quot;http://www.ospreysrugby.com/&quot;,
        &quot;facebook&quot;: &quot;https://www.facebook.com/ospreysrugby&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/ospreys&quot;,
        &quot;instagram&quot;: &quot;https://www.instagram.com/ospreys_official/&quot;,
        &quot;youtube&quot;: &quot;https://www.youtube.com/user/OspreysHighlights&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/7/7f/Logo_Ospreys.svg/1200px-Logo_Ospreys.svg.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 4,
                &quot;name&quot;: &quot;United Rugby Championship&quot;,
                &quot;creation&quot;: &quot;2001&quot;,
                &quot;last_champion&quot;: 50,
                &quot;most_successfull&quot;: 54,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/d/db/Logo_United_Rugby_Championship_2021.png/180px-Logo_United_Rugby_Championship_2021.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:46:41.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 52,
                    &quot;league_id&quot;: 4
                }
            },
            {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;Champion&#039;s Cup&quot;,
                &quot;creation&quot;: &quot;1995&quot;,
                &quot;last_champion&quot;: 11,
                &quot;most_successfull&quot;: 12,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/9/9a/Logo_Champions_Cup_2018.png/180px-Logo_Champions_Cup_2018.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:47:23.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 52,
                    &quot;league_id&quot;: 5
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 53,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Durban Sharks&quot;,
        &quot;nickname&quot;: &quot;Sharks&quot;,
        &quot;foundation&quot;: &quot;1996&quot;,
        &quot;stade&quot;: &quot;Kings Park Stadium&quot;,
        &quot;capacity&quot;: &quot;55000&quot;,
        &quot;website&quot;: &quot;http://www.sharksrugby.co.za/&quot;,
        &quot;facebook&quot;: &quot;https://www.facebook.com/SharksRugby&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/SharksRugby&quot;,
        &quot;instagram&quot;: &quot;https://www.instagram.com/sharksrugby/&quot;,
        &quot;youtube&quot;: &quot;https://www.youtube.com/user/TheSharksZA&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/7/7b/CellCSharksRugbylogo.svg/1200px-CellCSharksRugbylogo.svg.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 4,
                &quot;name&quot;: &quot;United Rugby Championship&quot;,
                &quot;creation&quot;: &quot;2001&quot;,
                &quot;last_champion&quot;: 50,
                &quot;most_successfull&quot;: 54,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/d/db/Logo_United_Rugby_Championship_2021.png/180px-Logo_United_Rugby_Championship_2021.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:46:41.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 53,
                    &quot;league_id&quot;: 4
                }
            },
            {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;Champion&#039;s Cup&quot;,
                &quot;creation&quot;: &quot;1995&quot;,
                &quot;last_champion&quot;: 11,
                &quot;most_successfull&quot;: 12,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/9/9a/Logo_Champions_Cup_2018.png/180px-Logo_Champions_Cup_2018.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:47:23.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 53,
                    &quot;league_id&quot;: 5
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 54,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Stormers&quot;,
        &quot;nickname&quot;: &quot;The Stormers&quot;,
        &quot;foundation&quot;: &quot;1996&quot;,
        &quot;stade&quot;: &quot;Cape Town Stadium&quot;,
        &quot;capacity&quot;: &quot;55000&quot;,
        &quot;website&quot;: &quot;http://thestormers.com/&quot;,
        &quot;facebook&quot;: &quot;https://www.facebook.com/stormers&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/thestormers&quot;,
        &quot;instagram&quot;: &quot;https://www.instagram.com/dhlstormers/&quot;,
        &quot;youtube&quot;: &quot;https://www.youtube.com/user/StormersTV&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/1/18/Logo_Stormers_Rugby.svg/1200px-Logo_Stormers_Rugby.svg.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 4,
                &quot;name&quot;: &quot;United Rugby Championship&quot;,
                &quot;creation&quot;: &quot;2001&quot;,
                &quot;last_champion&quot;: 50,
                &quot;most_successfull&quot;: 54,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/d/db/Logo_United_Rugby_Championship_2021.png/180px-Logo_United_Rugby_Championship_2021.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:46:41.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 54,
                    &quot;league_id&quot;: 4
                }
            },
            {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;Champion&#039;s Cup&quot;,
                &quot;creation&quot;: &quot;1995&quot;,
                &quot;last_champion&quot;: 11,
                &quot;most_successfull&quot;: 12,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/9/9a/Logo_Champions_Cup_2018.png/180px-Logo_Champions_Cup_2018.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:47:23.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 54,
                    &quot;league_id&quot;: 5
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 55,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Benetton Rugby Tr&eacute;vise&quot;,
        &quot;nickname&quot;: &quot;Benetton&quot;,
        &quot;foundation&quot;: &quot;1932&quot;,
        &quot;stade&quot;: &quot;Stadio Comunale di Monigo&quot;,
        &quot;capacity&quot;: &quot;6700&quot;,
        &quot;website&quot;: &quot;http://www.benettonrugby.it/&quot;,
        &quot;facebook&quot;: &quot;https://www.facebook.com/BenettonRugbyTreviso&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/benettonrugby?lang=it&quot;,
        &quot;instagram&quot;: &quot;https://www.instagram.com/benettonrugby/&quot;,
        &quot;youtube&quot;: &quot;https://www.youtube.com/user/BenettonRugby&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/a/a3/Logo_Benetton_Rugby.svg/1200px-Logo_Benetton_Rugby.svg.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 4,
                &quot;name&quot;: &quot;United Rugby Championship&quot;,
                &quot;creation&quot;: &quot;2001&quot;,
                &quot;last_champion&quot;: 50,
                &quot;most_successfull&quot;: 54,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/d/db/Logo_United_Rugby_Championship_2021.png/180px-Logo_United_Rugby_Championship_2021.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:46:41.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 55,
                    &quot;league_id&quot;: 4
                }
            },
            {
                &quot;id&quot;: 6,
                &quot;name&quot;: &quot;EPCR Challenge Cup&quot;,
                &quot;creation&quot;: &quot;1996&quot;,
                &quot;last_champion&quot;: 9,
                &quot;most_successfull&quot;: 5,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/6/69/Logo_Challenge_Cup_2021.png/180px-Logo_Challenge_Cup_2021.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:48:06.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 55,
                    &quot;league_id&quot;: 6
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 56,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Ulster Rugby&quot;,
        &quot;nickname&quot;: &quot;UlsterMan&quot;,
        &quot;foundation&quot;: &quot;1872&quot;,
        &quot;stade&quot;: &quot;Ravenhill Stadium&quot;,
        &quot;capacity&quot;: &quot;18200&quot;,
        &quot;website&quot;: &quot;http://www.ulsterrugby.com/&quot;,
        &quot;facebook&quot;: &quot;https://www.facebook.com/ulsterrugby/?utm_source=web&amp;utm_medium=footer&amp;utm_campaign=social-links&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/UlsterRugby?utm_source=web&amp;utm_medium=footer&amp;utm_campaign=social-links&quot;,
        &quot;instagram&quot;: &quot;https://www.instagram.com/officialulsterrugby&quot;,
        &quot;youtube&quot;: &quot;https://www.youtube.com/user/UlsterRugbyTV?sub_confirmation=1&quot;,
        &quot;logo&quot;: &quot;https://i.bleacherreport.net/images/team_logos/328x328/ulster_rugby.png?canvas=492,328&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 4,
                &quot;name&quot;: &quot;United Rugby Championship&quot;,
                &quot;creation&quot;: &quot;2001&quot;,
                &quot;last_champion&quot;: 50,
                &quot;most_successfull&quot;: 54,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/d/db/Logo_United_Rugby_Championship_2021.png/180px-Logo_United_Rugby_Championship_2021.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:46:41.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 56,
                    &quot;league_id&quot;: 4
                }
            },
            {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;Champion&#039;s Cup&quot;,
                &quot;creation&quot;: &quot;1995&quot;,
                &quot;last_champion&quot;: 11,
                &quot;most_successfull&quot;: 12,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/9/9a/Logo_Champions_Cup_2018.png/180px-Logo_Champions_Cup_2018.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:47:23.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 56,
                    &quot;league_id&quot;: 5
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 57,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;name&quot;: &quot;Z&egrave;bres Parma&quot;,
        &quot;nickname&quot;: &quot;Z&egrave;bra&quot;,
        &quot;foundation&quot;: &quot;1973&quot;,
        &quot;stade&quot;: &quot;Stadio XXV Aprile&quot;,
        &quot;capacity&quot;: &quot;5000&quot;,
        &quot;website&quot;: &quot;https://www.zebreparma.it/&quot;,
        &quot;facebook&quot;: &quot;https://www.zebreparma.it/it-it/facebook.aspx&quot;,
        &quot;twitter&quot;: &quot;https://www.zebreparma.it/it-it/twitter.aspx&quot;,
        &quot;instagram&quot;: &quot;https://www.zebreparma.it/it-it/instagram.aspx&quot;,
        &quot;youtube&quot;: &quot;https://www.zebreparma.it/it-it/youtube.aspx&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/b/b7/Logo_Zebre_Rugby_Club_2017.svg/1024px-Logo_Zebre_Rugby_Club_2017.svg.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 4,
                &quot;name&quot;: &quot;United Rugby Championship&quot;,
                &quot;creation&quot;: &quot;2001&quot;,
                &quot;last_champion&quot;: 50,
                &quot;most_successfull&quot;: 54,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/d/db/Logo_United_Rugby_Championship_2021.png/180px-Logo_United_Rugby_Championship_2021.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:46:41.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 57,
                    &quot;league_id&quot;: 4
                }
            },
            {
                &quot;id&quot;: 6,
                &quot;name&quot;: &quot;EPCR Challenge Cup&quot;,
                &quot;creation&quot;: &quot;1996&quot;,
                &quot;last_champion&quot;: 9,
                &quot;most_successfull&quot;: 5,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/6/69/Logo_Challenge_Cup_2021.png/180px-Logo_Challenge_Cup_2021.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:48:06.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 57,
                    &quot;league_id&quot;: 6
                }
            }
        ],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 58,
        &quot;created_at&quot;: &quot;2023-07-20T10:24:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-07-20T10:58:44.000000Z&quot;,
        &quot;name&quot;: &quot;Union Sportive Dacquoise&quot;,
        &quot;nickname&quot;: &quot;USD&quot;,
        &quot;foundation&quot;: &quot;1904&quot;,
        &quot;stade&quot;: &quot;Maurice-Boyau&quot;,
        &quot;capacity&quot;: &quot;7262&quot;,
        &quot;website&quot;: &quot;https://usdax.fr/rugby/&quot;,
        &quot;facebook&quot;: &quot;http://www.facebook.com/usdaxrugbylandes&quot;,
        &quot;twitter&quot;: &quot;http://twitter.com/usdaxrugby&quot;,
        &quot;instagram&quot;: &quot;https://www.instagram.com/usdaxrugby/&quot;,
        &quot;youtube&quot;: null,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/7/7d/Logo_US_Dax_Rugby_Landes_-_2018.svg/langfr-130px-Logo_US_Dax_Rugby_Landes_-_2018.svg.png&quot;,
        &quot;leagues&quot;: [],
        &quot;pictures&quot;: []
    },
    {
        &quot;id&quot;: 59,
        &quot;created_at&quot;: &quot;2023-07-20T10:30:58.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-07-20T10:59:55.000000Z&quot;,
        &quot;name&quot;: &quot;Valence Romans Dr&ocirc;me Rugby&quot;,
        &quot;nickname&quot;: &quot;VRDR&quot;,
        &quot;foundation&quot;: &quot;2016&quot;,
        &quot;stade&quot;: &quot;Georges-Pompidou&quot;,
        &quot;capacity&quot;: &quot;15000&quot;,
        &quot;website&quot;: &quot;http://www.vrdr.fr/&quot;,
        &quot;facebook&quot;: &quot;https://fr-fr.facebook.com/VRDRrugby/&quot;,
        &quot;twitter&quot;: &quot;https://twitter.com/vrdrrugby&quot;,
        &quot;instagram&quot;: &quot;https://www.instagram.com/vrdrrugby/&quot;,
        &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UCZUNaco8URaVgTHs0U961lw&quot;,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/7/7c/Logo_Valence_Romans_Dr%C3%B4me_Rugby_-_2019.svg/langfr-130px-Logo_Valence_Romans_Dr%C3%B4me_Rugby_-_2019.svg.png&quot;,
        &quot;leagues&quot;: [
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Pro D2&quot;,
                &quot;creation&quot;: &quot;2000&quot;,
                &quot;last_champion&quot;: 28,
                &quot;most_successfull&quot;: 6,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/c/c5/ProD2_logo_2012.svg/langfr-150px-ProD2_logo_2012.svg.png&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2023-07-20T10:45:45.000000Z&quot;,
                &quot;pivot&quot;: {
                    &quot;team_id&quot;: 59,
                    &quot;league_id&quot;: 2
                }
            }
        ],
        &quot;pictures&quot;: []
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-teams" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-teams"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-teams"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-teams" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-teams">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-teams" data-method="GET"
      data-path="api/teams"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-teams', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-teams"
                    onclick="tryItOut('GETapi-teams');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-teams"
                    onclick="cancelTryOut('GETapi-teams');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-teams"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/teams</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-teams"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-teams"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-teams">Store a newly created resource in storage.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-teams">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "/api/teams" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"nmerltaejcadd\",
    \"nickname\": \"gpubc\",
    \"foundation\": \"hobl\",
    \"stade\": \"facilis\",
    \"capacity\": \"ea\",
    \"website\": \"itaque\",
    \"facebook\": \"iusto\",
    \"twitter\": \"quia\",
    \"instagram\": \"sed\",
    \"youtube\": \"dolorem\",
    \"logo\": \"eum\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "/api/teams"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "nmerltaejcadd",
    "nickname": "gpubc",
    "foundation": "hobl",
    "stade": "facilis",
    "capacity": "ea",
    "website": "itaque",
    "facebook": "iusto",
    "twitter": "quia",
    "instagram": "sed",
    "youtube": "dolorem",
    "logo": "eum"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    '/api/teams',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'nmerltaejcadd',
            'nickname' =&gt; 'gpubc',
            'foundation' =&gt; 'hobl',
            'stade' =&gt; 'facilis',
            'capacity' =&gt; 'ea',
            'website' =&gt; 'itaque',
            'facebook' =&gt; 'iusto',
            'twitter' =&gt; 'quia',
            'instagram' =&gt; 'sed',
            'youtube' =&gt; 'dolorem',
            'logo' =&gt; 'eum',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-teams">
</span>
<span id="execution-results-POSTapi-teams" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-teams"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-teams"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-teams" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-teams">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-teams" data-method="POST"
      data-path="api/teams"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-teams', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-teams"
                    onclick="tryItOut('POSTapi-teams');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-teams"
                    onclick="cancelTryOut('POSTapi-teams');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-teams"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/teams</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-teams"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-teams"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-teams"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-teams"
               value="nmerltaejcadd"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>nmerltaejcadd</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>nickname</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="nickname"                data-endpoint="POSTapi-teams"
               value="gpubc"
               data-component="body">
    <br>
<p>Must not be greater than 5 characters. Example: <code>gpubc</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>foundation</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="foundation"                data-endpoint="POSTapi-teams"
               value="hobl"
               data-component="body">
    <br>
<p>Must not be greater than 4 characters. Example: <code>hobl</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>stade</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="stade"                data-endpoint="POSTapi-teams"
               value="facilis"
               data-component="body">
    <br>
<p>Example: <code>facilis</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>capacity</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="capacity"                data-endpoint="POSTapi-teams"
               value="ea"
               data-component="body">
    <br>
<p>Example: <code>ea</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>website</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="website"                data-endpoint="POSTapi-teams"
               value="itaque"
               data-component="body">
    <br>
<p>Example: <code>itaque</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>facebook</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="facebook"                data-endpoint="POSTapi-teams"
               value="iusto"
               data-component="body">
    <br>
<p>Example: <code>iusto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>twitter</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="twitter"                data-endpoint="POSTapi-teams"
               value="quia"
               data-component="body">
    <br>
<p>Example: <code>quia</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>instagram</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="instagram"                data-endpoint="POSTapi-teams"
               value="sed"
               data-component="body">
    <br>
<p>Example: <code>sed</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>youtube</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="youtube"                data-endpoint="POSTapi-teams"
               value="dolorem"
               data-component="body">
    <br>
<p>Example: <code>dolorem</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>logo</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="logo"                data-endpoint="POSTapi-teams"
               value="eum"
               data-component="body">
    <br>
<p>Example: <code>eum</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-teams--team_id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-teams--team_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "/api/teams/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "/api/teams/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    '/api/teams/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-teams--team_id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 57
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;created_at&quot;: null,
    &quot;updated_at&quot;: null,
    &quot;name&quot;: &quot;Avirons Bayonnais&quot;,
    &quot;nickname&quot;: &quot;AB&quot;,
    &quot;foundation&quot;: &quot;1906&quot;,
    &quot;stade&quot;: &quot;Jean Dauger&quot;,
    &quot;capacity&quot;: &quot;18069&quot;,
    &quot;website&quot;: &quot;www.abrugby.fr&quot;,
    &quot;facebook&quot;: &quot;https://www.facebook.com/avironbayonnaisrugbypro&quot;,
    &quot;twitter&quot;: &quot;https://twitter.com/avironrugbypro&quot;,
    &quot;instagram&quot;: &quot;https://www.instagram.com/avironrugbypro/&quot;,
    &quot;youtube&quot;: &quot;&quot;,
    &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/1/1b/Logo_Aviron_Bayonnais_Rugby_-_2022.svg/1936px-Logo_Aviron_Bayonnais_Rugby_-_2022.svg.png&quot;,
    &quot;leagues&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Top 14&quot;,
            &quot;creation&quot;: &quot;1892&quot;,
            &quot;last_champion&quot;: 12,
            &quot;most_successfull&quot;: 12,
            &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/3/3a/Top_14.svg/langfr-180px-Top_14.svg.png&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: &quot;2023-07-20T10:45:08.000000Z&quot;,
            &quot;pivot&quot;: {
                &quot;team_id&quot;: 1,
                &quot;league_id&quot;: 1
            }
        },
        {
            &quot;id&quot;: 6,
            &quot;name&quot;: &quot;EPCR Challenge Cup&quot;,
            &quot;creation&quot;: &quot;1996&quot;,
            &quot;last_champion&quot;: 9,
            &quot;most_successfull&quot;: 5,
            &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/6/69/Logo_Challenge_Cup_2021.png/180px-Logo_Challenge_Cup_2021.png&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: &quot;2023-07-20T10:48:06.000000Z&quot;,
            &quot;pivot&quot;: {
                &quot;team_id&quot;: 1,
                &quot;league_id&quot;: 6
            }
        }
    ],
    &quot;pictures&quot;: []
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-teams--team_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-teams--team_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-teams--team_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-teams--team_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-teams--team_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-teams--team_id-" data-method="GET"
      data-path="api/teams/{team_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-teams--team_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-teams--team_id-"
                    onclick="tryItOut('GETapi-teams--team_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-teams--team_id-"
                    onclick="cancelTryOut('GETapi-teams--team_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-teams--team_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/teams/{team_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-teams--team_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-teams--team_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>team_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="team_id"                data-endpoint="GETapi-teams--team_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the team. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-teams--id-">Update the specified resource in storage.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-teams--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "/api/teams/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"mom\",
    \"nickname\": \"uo\",
    \"foundation\": \"np\",
    \"stade\": \"non\",
    \"capacity\": \"omnis\",
    \"website\": \"ea\",
    \"facebook\": \"voluptas\",
    \"twitter\": \"eum\",
    \"instagram\": \"maxime\",
    \"youtube\": \"voluptatem\",
    \"description\": \"Ducimus excepturi ab optio illo qui repellat quae.\",
    \"logo\": \"et\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "/api/teams/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "mom",
    "nickname": "uo",
    "foundation": "np",
    "stade": "non",
    "capacity": "omnis",
    "website": "ea",
    "facebook": "voluptas",
    "twitter": "eum",
    "instagram": "maxime",
    "youtube": "voluptatem",
    "description": "Ducimus excepturi ab optio illo qui repellat quae.",
    "logo": "et"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    '/api/teams/1',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'mom',
            'nickname' =&gt; 'uo',
            'foundation' =&gt; 'np',
            'stade' =&gt; 'non',
            'capacity' =&gt; 'omnis',
            'website' =&gt; 'ea',
            'facebook' =&gt; 'voluptas',
            'twitter' =&gt; 'eum',
            'instagram' =&gt; 'maxime',
            'youtube' =&gt; 'voluptatem',
            'description' =&gt; 'Ducimus excepturi ab optio illo qui repellat quae.',
            'logo' =&gt; 'et',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-teams--id-">
</span>
<span id="execution-results-PUTapi-teams--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-teams--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-teams--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-teams--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-teams--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-teams--id-" data-method="PUT"
      data-path="api/teams/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-teams--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-teams--id-"
                    onclick="tryItOut('PUTapi-teams--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-teams--id-"
                    onclick="cancelTryOut('PUTapi-teams--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-teams--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/teams/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/teams/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="PUTapi-teams--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-teams--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-teams--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-teams--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the team. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-teams--id-"
               value="mom"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>mom</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>nickname</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="nickname"                data-endpoint="PUTapi-teams--id-"
               value="uo"
               data-component="body">
    <br>
<p>Must not be greater than 5 characters. Example: <code>uo</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>foundation</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="foundation"                data-endpoint="PUTapi-teams--id-"
               value="np"
               data-component="body">
    <br>
<p>Must not be greater than 4 characters. Example: <code>np</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>stade</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="stade"                data-endpoint="PUTapi-teams--id-"
               value="non"
               data-component="body">
    <br>
<p>Example: <code>non</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>capacity</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="capacity"                data-endpoint="PUTapi-teams--id-"
               value="omnis"
               data-component="body">
    <br>
<p>Example: <code>omnis</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>website</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="website"                data-endpoint="PUTapi-teams--id-"
               value="ea"
               data-component="body">
    <br>
<p>Example: <code>ea</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>facebook</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="facebook"                data-endpoint="PUTapi-teams--id-"
               value="voluptas"
               data-component="body">
    <br>
<p>Example: <code>voluptas</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>twitter</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="twitter"                data-endpoint="PUTapi-teams--id-"
               value="eum"
               data-component="body">
    <br>
<p>Example: <code>eum</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>instagram</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="instagram"                data-endpoint="PUTapi-teams--id-"
               value="maxime"
               data-component="body">
    <br>
<p>Example: <code>maxime</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>youtube</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="youtube"                data-endpoint="PUTapi-teams--id-"
               value="voluptatem"
               data-component="body">
    <br>
<p>Example: <code>voluptatem</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-teams--id-"
               value="Ducimus excepturi ab optio illo qui repellat quae."
               data-component="body">
    <br>
<p>Example: <code>Ducimus excepturi ab optio illo qui repellat quae.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>logo</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="logo"                data-endpoint="PUTapi-teams--id-"
               value="et"
               data-component="body">
    <br>
<p>Example: <code>et</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-teams--id-">Remove the specified resource from storage.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-teams--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "/api/teams/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "/api/teams/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    '/api/teams/1',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-teams--id-">
</span>
<span id="execution-results-DELETEapi-teams--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-teams--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-teams--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-teams--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-teams--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-teams--id-" data-method="DELETE"
      data-path="api/teams/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-teams--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-teams--id-"
                    onclick="tryItOut('DELETEapi-teams--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-teams--id-"
                    onclick="cancelTryOut('DELETEapi-teams--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-teams--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/teams/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="DELETEapi-teams--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-teams--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-teams--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-teams--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the team. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-leagues">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-leagues">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "/api/leagues" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "/api/leagues"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    '/api/leagues',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-leagues">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 56
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Top 14&quot;,
        &quot;creation&quot;: &quot;1892&quot;,
        &quot;last_champion&quot;: 12,
        &quot;most_successfull&quot;: 12,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/3/3a/Top_14.svg/langfr-180px-Top_14.svg.png&quot;,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: &quot;2023-07-20T10:45:08.000000Z&quot;,
        &quot;teams&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Avirons Bayonnais&quot;,
                &quot;nickname&quot;: &quot;AB&quot;,
                &quot;foundation&quot;: &quot;1906&quot;,
                &quot;stade&quot;: &quot;Jean Dauger&quot;,
                &quot;capacity&quot;: &quot;18069&quot;,
                &quot;website&quot;: &quot;www.abrugby.fr&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/avironbayonnaisrugbypro&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/avironrugbypro&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/avironrugbypro/&quot;,
                &quot;youtube&quot;: &quot;&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/1/1b/Logo_Aviron_Bayonnais_Rugby_-_2022.svg/1936px-Logo_Aviron_Bayonnais_Rugby_-_2022.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 1,
                    &quot;team_id&quot;: 1
                }
            },
            {
                &quot;id&quot;: 2,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Union Bordaux B&egrave;gles&quot;,
                &quot;nickname&quot;: &quot;UBB&quot;,
                &quot;foundation&quot;: &quot;2006&quot;,
                &quot;stade&quot;: &quot;Chaban-Delmas&quot;,
                &quot;capacity&quot;: &quot;34462&quot;,
                &quot;website&quot;: &quot;http://www.ubbrugby.com/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/ubbrugby&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/ubbrugby&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/ubbrugby&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UC0ofHgdtPGcNd21eVuBSWBQ&quot;,
                &quot;logo&quot;: &quot;https://www.ubbrugby.com/application/uploads/files/logo_UBB%20transparent.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 1,
                    &quot;team_id&quot;: 2
                }
            },
            {
                &quot;id&quot;: 4,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Castres Olympique&quot;,
                &quot;nickname&quot;: &quot;CO&quot;,
                &quot;foundation&quot;: &quot;1906&quot;,
                &quot;stade&quot;: &quot;Pierre-Fabre&quot;,
                &quot;capacity&quot;: &quot;12500&quot;,
                &quot;website&quot;: &quot;www.castres-olympique.com&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/CastresOlympiqueOfficiel&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/CastresRugby&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/castresrugby/&quot;,
                &quot;youtube&quot;: &quot;&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/9/94/Castres_Olympique.svg/999px-Castres_Olympique.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 1,
                    &quot;team_id&quot;: 4
                }
            },
            {
                &quot;id&quot;: 5,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Association Sportive Montferrandaise Clermont Auvergne&quot;,
                &quot;nickname&quot;: &quot;ASM&quot;,
                &quot;foundation&quot;: &quot;1911&quot;,
                &quot;stade&quot;: &quot;Marcel Michelin&quot;,
                &quot;capacity&quot;: &quot;19372&quot;,
                &quot;website&quot;: &quot;www.asm-rugby.com&quot;,
                &quot;facebook&quot;: &quot;https://fr-fr.facebook.com/asm.clermont.auvergne/&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/ASMOfficiel&quot;,
                &quot;instagram&quot;: &quot;&quot;,
                &quot;youtube&quot;: &quot;&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/a/a8/Logo_ASM_Clermont_Auvergne_2019.svg/1200px-Logo_ASM_Clermont_Auvergne_2019.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 1,
                    &quot;team_id&quot;: 5
                }
            },
            {
                &quot;id&quot;: 6,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Lyon Olympique Universitaire&quot;,
                &quot;nickname&quot;: &quot;LOU&quot;,
                &quot;foundation&quot;: &quot;1896&quot;,
                &quot;stade&quot;: &quot;Matmut Stadium Gerland&quot;,
                &quot;capacity&quot;: &quot;35029&quot;,
                &quot;website&quot;: &quot;www.lourugby.fr&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/LOU.Rugby/&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/lelourugby?lang=fr&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/lourugby1896/?hl=fr&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UCAwMdlmJy1PmeeXwdZuTjXw&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/2/25/Lyon_olympique_universitaire.svg/1200px-Lyon_olympique_universitaire.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 1,
                    &quot;team_id&quot;: 6
                }
            },
            {
                &quot;id&quot;: 7,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Montpellier H&eacute;rault Rugby&quot;,
                &quot;nickname&quot;: &quot;MHR&quot;,
                &quot;foundation&quot;: &quot;1986&quot;,
                &quot;stade&quot;: &quot;GGL Stadium&quot;,
                &quot;capacity&quot;: &quot;15697&quot;,
                &quot;website&quot;: &quot;www.montpellier-rugby.com&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/Montpellier.Rugby&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/MHR_officiel&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/mhr_officiel&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/user/montpellierrugby?feature=results_main&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/d/d9/Logo_Montpellier_H%C3%A9rault_rugby_2013.svg/1200px-Logo_Montpellier_H%C3%A9rault_rugby_2013.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 1,
                    &quot;team_id&quot;: 7
                }
            },
            {
                &quot;id&quot;: 8,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Section Paloise&quot;,
                &quot;nickname&quot;: &quot;SP&quot;,
                &quot;foundation&quot;: &quot;1902&quot;,
                &quot;stade&quot;: &quot;Stade du Hameau&quot;,
                &quot;capacity&quot;: &quot;14588&quot;,
                &quot;website&quot;: &quot;http://www.section-paloise.com/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/SectionPaloiseBearnPyrenees&quot;,
                &quot;twitter&quot;: &quot;http://instagram.com/sectionpaloisebearnpyrenees&quot;,
                &quot;instagram&quot;: &quot;http://instagram.com/sectionpaloisebearnpyrenees&quot;,
                &quot;youtube&quot;: &quot;&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/9/91/Section_Paloise_logo.svg/1200px-Section_Paloise_logo.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 1,
                    &quot;team_id&quot;: 8
                }
            },
            {
                &quot;id&quot;: 9,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Rugby Club Toulonnais&quot;,
                &quot;nickname&quot;: &quot;RCT&quot;,
                &quot;foundation&quot;: &quot;1908&quot;,
                &quot;stade&quot;: &quot;Stade Mayol&quot;,
                &quot;capacity&quot;: &quot;17500&quot;,
                &quot;website&quot;: &quot;http://www.rctoulon.com/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/RCTofficiel&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/rctofficiel&quot;,
                &quot;instagram&quot;: &quot;https://instagram.com/rctofficiel/&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/c/RCTRugbyClubToulonnais&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/5/5a/Logo_Rugby_club_toulonnais.svg/1200px-Logo_Rugby_club_toulonnais.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 1,
                    &quot;team_id&quot;: 9
                }
            },
            {
                &quot;id&quot;: 10,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Stade Fran&ccedil;ais Paris&quot;,
                &quot;nickname&quot;: &quot;SFP&quot;,
                &quot;foundation&quot;: &quot;1883&quot;,
                &quot;stade&quot;: &quot;Jean-Bouin&quot;,
                &quot;capacity&quot;: &quot;25000&quot;,
                &quot;website&quot;: &quot;www.stade.fr&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/SFPARIS&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/SFParisRugby&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/stade_francais_paris/&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UC9HI0fd8SE_IfSaFkVKfPLA&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/0/0f/Logo_Stade_fran%C3%A7ais_PR_2018.svg/1200px-Logo_Stade_fran%C3%A7ais_PR_2018.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 1,
                    &quot;team_id&quot;: 10
                }
            },
            {
                &quot;id&quot;: 11,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Stade Rochelais&quot;,
                &quot;nickname&quot;: &quot;SR&quot;,
                &quot;foundation&quot;: &quot;1898&quot;,
                &quot;stade&quot;: &quot;Marcel Deflandre&quot;,
                &quot;capacity&quot;: &quot;16000&quot;,
                &quot;website&quot;: &quot;http://www.staderochelais.com/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/staderochelais&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/staderochelais&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/staderochelais&quot;,
                &quot;youtube&quot;: &quot;https://www.dailymotion.com/staderochelais&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/4/44/Logo_Stade_rochelais_2016.svg/1594px-Logo_Stade_rochelais_2016.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 1,
                    &quot;team_id&quot;: 11
                }
            },
            {
                &quot;id&quot;: 12,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Stade Toulousain&quot;,
                &quot;nickname&quot;: &quot;ST&quot;,
                &quot;foundation&quot;: &quot;1907&quot;,
                &quot;stade&quot;: &quot;Ernest Wallon&quot;,
                &quot;capacity&quot;: &quot;19000&quot;,
                &quot;website&quot;: &quot;www.stadetoulousain.fr&quot;,
                &quot;facebook&quot;: &quot;https://fr-fr.facebook.com/StadeToulousainOfficiel&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/StadeToulousain&quot;,
                &quot;instagram&quot;: &quot;http://instagram.com/stadetoulousainrugby&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/stadetoulousain&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/0/01/Logo_Stade_Toulousain_Rugby.svg&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 1,
                    &quot;team_id&quot;: 12
                }
            },
            {
                &quot;id&quot;: 13,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Union Sportive Arlequins Perpignanais&quot;,
                &quot;nickname&quot;: &quot;USAP&quot;,
                &quot;foundation&quot;: &quot;1902&quot;,
                &quot;stade&quot;: &quot;Aim&eacute;-Giral&quot;,
                &quot;capacity&quot;: &quot;14593&quot;,
                &quot;website&quot;: &quot;www.usap.fr&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/USAPOfficiel&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/usap_officiel&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/usapofficiel/&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UCUZuZFU1VeHD9ZJJ3t3wnsQ&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/7/77/Logo_USA_Perpignan_2017.svg/1200px-Logo_USA_Perpignan_2017.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 1,
                    &quot;team_id&quot;: 13
                }
            },
            {
                &quot;id&quot;: 14,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Racing 92&quot;,
                &quot;nickname&quot;: &quot;R92&quot;,
                &quot;foundation&quot;: &quot;1890&quot;,
                &quot;stade&quot;: &quot;Paris La D&eacute;fense Ar&eacute;na&quot;,
                &quot;capacity&quot;: &quot;32000&quot;,
                &quot;website&quot;: &quot;www.racing92.fr&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/Racing92Officiel/&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/Racing92&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/Racing92/&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UC4MQWtqrcD567vQIKyBJcsQ/&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/c/c7/Logo_Racing_92_2015.svg/640px-Logo_Racing_92_2015.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 1,
                    &quot;team_id&quot;: 14
                }
            },
            {
                &quot;id&quot;: 28,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Oyonnax Rugby&quot;,
                &quot;nickname&quot;: &quot;OYO&quot;,
                &quot;foundation&quot;: &quot;1909&quot;,
                &quot;stade&quot;: &quot;Charles Mathon&quot;,
                &quot;capacity&quot;: &quot;11400&quot;,
                &quot;website&quot;: &quot;http://www.oyonnaxrugby.com/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/OyonnaxRugbyOfficiel&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/OyonnaxRugby&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/oyonnaxrugby/?hl=fr&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UCf7BLip3jg_Vod8RRJa7T6Q&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/9/9d/Logo_Oyonnax_rugby_2018.svg/1200px-Logo_Oyonnax_rugby_2018.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 1,
                    &quot;team_id&quot;: 28
                }
            }
        ]
    },
    {
        &quot;id&quot;: 2,
        &quot;name&quot;: &quot;Pro D2&quot;,
        &quot;creation&quot;: &quot;2000&quot;,
        &quot;last_champion&quot;: 28,
        &quot;most_successfull&quot;: 6,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/c/c5/ProD2_logo_2012.svg/langfr-150px-ProD2_logo_2012.svg.png&quot;,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: &quot;2023-07-20T10:45:45.000000Z&quot;,
        &quot;teams&quot;: [
            {
                &quot;id&quot;: 3,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Club Athl&eacute;tique Brive Corr&egrave;ze Limousin&quot;,
                &quot;nickname&quot;: &quot;CAB&quot;,
                &quot;foundation&quot;: &quot;1910&quot;,
                &quot;stade&quot;: &quot;Am&eacute;d&eacute;e- Domenech&quot;,
                &quot;capacity&quot;: &quot;13379&quot;,
                &quot;website&quot;: &quot;www.cabrive-rugby.com&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/CA-Brive-Rugby-Officiel-136407633069304/&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/CABCLRUGBY&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/cabriverugbyofficiel/&quot;,
                &quot;youtube&quot;: &quot;&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/5/56/Club_athl%C3%A9tique_Brive_Corr%C3%A8ze_Limousin_logo.svg/800px-Club_athl%C3%A9tique_Brive_Corr%C3%A8ze_Limousin_logo.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 2,
                    &quot;team_id&quot;: 3
                }
            },
            {
                &quot;id&quot;: 15,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Provence Rugby Aix-Marseille&quot;,
                &quot;nickname&quot;: &quot;PR&quot;,
                &quot;foundation&quot;: &quot;1970&quot;,
                &quot;stade&quot;: &quot;Maurice-David&quot;,
                &quot;capacity&quot;: &quot;6425&quot;,
                &quot;website&quot;: &quot;https://www.provencerugby.com/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/ProvenceRugby&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/ProvenceRugby&quot;,
                &quot;instagram&quot;: &quot;https://instagram.com/provencerugbyofficiel/&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UC6j-ShG-12kluScwHKoEhew&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/4/48/Logo_Provence_Rugby_-_2021.svg/1200px-Logo_Provence_Rugby_-_2021.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 2,
                    &quot;team_id&quot;: 15
                }
            },
            {
                &quot;id&quot;: 16,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Stade Aurillacois Cantal Auvergne&quot;,
                &quot;nickname&quot;: &quot;SACA&quot;,
                &quot;foundation&quot;: &quot;1904&quot;,
                &quot;stade&quot;: &quot;Jean-Alrice&quot;,
                &quot;capacity&quot;: &quot;7800&quot;,
                &quot;website&quot;: &quot;www.stade-aurillacois.fr&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/SArugbyofficiel/&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/SArugbyofficiel&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/sarugbyofficiel/&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UCouXlRCs_l6lnTG1pTSQKaQ&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/c/c2/Logo_Stade_aurillacois_Cantal_Auvergne_2018.svg/800px-Logo_Stade_aurillacois_Cantal_Auvergne_2018.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 2,
                    &quot;team_id&quot;: 16
                }
            },
            {
                &quot;id&quot;: 17,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Sportive Union Agen Lot-et-Garonne&quot;,
                &quot;nickname&quot;: &quot;SUA&quot;,
                &quot;foundation&quot;: &quot;1905&quot;,
                &quot;stade&quot;: &quot;Armandie&quot;,
                &quot;capacity&quot;: &quot;14400&quot;,
                &quot;website&quot;: &quot;http://www.agen-rugby.com/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/agenrugby/&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/agen_rugby&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/agen_rugby/&quot;,
                &quot;youtube&quot;: &quot;http://www.dailymotion.com/agenrugby&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/5/51/Logo_Sporting_Union_Agen_Lot-et-Garonne_2020.svg/674px-Logo_Sporting_Union_Agen_Lot-et-Garonne_2020.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 2,
                    &quot;team_id&quot;: 17
                }
            },
            {
                &quot;id&quot;: 18,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Soyaux Angoul&ecirc;me XV Charente&quot;,
                &quot;nickname&quot;: &quot;SA XV&quot;,
                &quot;foundation&quot;: &quot;2010&quot;,
                &quot;stade&quot;: &quot;Chanzy&quot;,
                &quot;capacity&quot;: &quot;8000&quot;,
                &quot;website&quot;: &quot;http://www.saxvcharente.fr/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/saxvcharente.fr&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/saxv_charente&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/saxv_charente_rugby&quot;,
                &quot;youtube&quot;: &quot;&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/a/a5/Logo_Soyaux_Angoul%C3%AAme_XV_Charente_-_2017.svg/1200px-Logo_Soyaux_Angoul%C3%AAme_XV_Charente_-_2017.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 2,
                    &quot;team_id&quot;: 18
                }
            },
            {
                &quot;id&quot;: 19,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Association Sportive B&eacute;ziers H&eacute;rault&quot;,
                &quot;nickname&quot;: &quot;ASBH&quot;,
                &quot;foundation&quot;: &quot;1911&quot;,
                &quot;stade&quot;: &quot;Raoul-Barri&egrave;re&quot;,
                &quot;capacity&quot;: &quot;18255&quot;,
                &quot;website&quot;: &quot;https://www.asbh.net/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/pages/ASBH-Officiel&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/ASBHOfficiel&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/asbhofficiel/&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/c/ASB%C3%A9ziersH%C3%A9raultRugby&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/1/14/Logo_AS_B%C3%A9ziers_H%C3%A9rault.svg/1200px-Logo_AS_B%C3%A9ziers_H%C3%A9rault.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 2,
                    &quot;team_id&quot;: 19
                }
            },
            {
                &quot;id&quot;: 20,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Biarritz Olympique&quot;,
                &quot;nickname&quot;: &quot;BO&quot;,
                &quot;foundation&quot;: &quot;1913&quot;,
                &quot;stade&quot;: &quot;Parc des sports Aguil&eacute;ra&quot;,
                &quot;capacity&quot;: &quot;13400&quot;,
                &quot;website&quot;: &quot;bo-pb.com&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/BOPB-page-officielle-208217155896387/&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/BOPBweb&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/bopb_officiel/?hl=fr&quot;,
                &quot;youtube&quot;: &quot;&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/0/05/Logo_Biarritz_Olympique_Pays_Basque_-_2016.svg/1200px-Logo_Biarritz_Olympique_Pays_Basque_-_2016.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 2,
                    &quot;team_id&quot;: 20
                }
            },
            {
                &quot;id&quot;: 21,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Union Sportive Carcasonnaise XV&quot;,
                &quot;nickname&quot;: &quot;USC XV&quot;,
                &quot;foundation&quot;: &quot;1899&quot;,
                &quot;stade&quot;: &quot;Albert-Domec&quot;,
                &quot;capacity&quot;: &quot;6500&quot;,
                &quot;website&quot;: &quot;http://www.uscarcassonne.com/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/USCXV&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/USCXV&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/uscarcassonnexv&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/user/UsCarcassonne1&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/c/ca/Logo_Union_sportive_carcassonnaise_XV_2010.svg/1200px-Logo_Union_sportive_carcassonnaise_XV_2010.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 2,
                    &quot;team_id&quot;: 21
                }
            },
            {
                &quot;id&quot;: 22,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Colomiers Rugby&quot;,
                &quot;nickname&quot;: &quot;COL&quot;,
                &quot;foundation&quot;: &quot;1915&quot;,
                &quot;stade&quot;: &quot;Michel Bendichou&quot;,
                &quot;capacity&quot;: &quot;11000&quot;,
                &quot;website&quot;: &quot;http://www.colomiers-rugby.com/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/ColomiersRugbyOfficiel/&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/ColomiersRugby&quot;,
                &quot;instagram&quot;: &quot;https://instagram.com/colomiersrugby&quot;,
                &quot;youtube&quot;: &quot;&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/e/e9/Logo_Colomiers_Rugby_2008.svg&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 2,
                    &quot;team_id&quot;: 22
                }
            },
            {
                &quot;id&quot;: 23,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Football Club de Grenoble Rugby&quot;,
                &quot;nickname&quot;: &quot;FCGB&quot;,
                &quot;foundation&quot;: &quot;1892&quot;,
                &quot;stade&quot;: &quot;Stade des Alpes&quot;,
                &quot;capacity&quot;: &quot;20068&quot;,
                &quot;website&quot;: &quot;http://www.fcgrugby.com/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/FCGrugby&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/fcgrugby?lang=fr&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/fcgrugby/&quot;,
                &quot;youtube&quot;: &quot;&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/4/46/Logo_FC_Grenoble_Rugby.svg&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 2,
                    &quot;team_id&quot;: 23
                }
            },
            {
                &quot;id&quot;: 24,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Union Sportive Montabanaise XV&quot;,
                &quot;nickname&quot;: &quot;USM XV&quot;,
                &quot;foundation&quot;: &quot;1903&quot;,
                &quot;stade&quot;: &quot;Sapiac&quot;,
                &quot;capacity&quot;: &quot;1937&quot;,
                &quot;website&quot;: &quot;www.usmsapiac.fr&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/USMsapiac&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/UsmSapiacRugby&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/usm_sapiac/&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UCBOhWG8te6jvgqnx-2JPwWA&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/9/92/Logo_US_Montalbanaise_-_2017.svg/1200px-Logo_US_Montalbanaise_-_2017.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 2,
                    &quot;team_id&quot;: 24
                }
            },
            {
                &quot;id&quot;: 25,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Stade Montois Rugby&quot;,
                &quot;nickname&quot;: &quot;SMR&quot;,
                &quot;foundation&quot;: &quot;1908&quot;,
                &quot;stade&quot;: &quot;Andr&eacute; et Guy Boniface&quot;,
                &quot;capacity&quot;: &quot;8250&quot;,
                &quot;website&quot;: &quot;http://www.stademontoisrugby.fr/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/SM.Rugby.Pro/&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/SMR_Rugby&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/stademontoisrugby/?hl=fr&quot;,
                &quot;youtube&quot;: &quot;&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/Stade_Montois_Rugby_Pro.svg/1200px-Stade_Montois_Rugby_Pro.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 2,
                    &quot;team_id&quot;: 25
                }
            },
            {
                &quot;id&quot;: 26,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Rugby Massy Club Essonne&quot;,
                &quot;nickname&quot;: &quot;RCME&quot;,
                &quot;foundation&quot;: &quot;1971&quot;,
                &quot;stade&quot;: &quot;Jules Ladoum&egrave;gue&quot;,
                &quot;capacity&quot;: &quot;3000&quot;,
                &quot;website&quot;: &quot;rcmessonne.com&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/pages/Rugby-Club-Massy-Essonne&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/RCME91&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/rcme_officiel/&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UCTYBfKIfruJbj8QRfL0PZ1w&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/0/0a/Logo_Rugby_Club_Massy_Essonne_-_2020.svg/800px-Logo_Rugby_Club_Massy_Essonne_-_2020.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 2,
                    &quot;team_id&quot;: 26
                }
            },
            {
                &quot;id&quot;: 27,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;USON Nevers Rugby&quot;,
                &quot;nickname&quot;: &quot;USON&quot;,
                &quot;foundation&quot;: &quot;1903&quot;,
                &quot;stade&quot;: &quot;Stade du Pr&eacute; Fleuri &quot;,
                &quot;capacity&quot;: &quot;7500&quot;,
                &quot;website&quot;: &quot;http://www.usonneversrugby.com/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/UsonNeversRugby&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/usonneversrugby&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/usonneversrugby&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/user/UsonRugbyPlus&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/4/4a/Logo_USON_Nevers_2016.svg/782px-Logo_USON_Nevers_2016.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 2,
                    &quot;team_id&quot;: 27
                }
            },
            {
                &quot;id&quot;: 29,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Rouen Normandie Rugby&quot;,
                &quot;nickname&quot;: &quot;RNR&quot;,
                &quot;foundation&quot;: &quot;2009&quot;,
                &quot;stade&quot;: &quot;Robert Diochon&quot;,
                &quot;capacity&quot;: &quot;12018&quot;,
                &quot;website&quot;: &quot;https://rouennormandierugby.fr/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/RouenNormandieRugby/&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/rouenndierugby?lang=fr&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/rouen_normandie_rugby/&quot;,
                &quot;youtube&quot;: &quot;&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/8/8e/Logo_Rouen_Normandie_Rugby_-_2019.svg/1200px-Logo_Rouen_Normandie_Rugby_-_2019.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 2,
                    &quot;team_id&quot;: 29
                }
            },
            {
                &quot;id&quot;: 30,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Rugby Club Vannetais&quot;,
                &quot;nickname&quot;: &quot;RCV&quot;,
                &quot;foundation&quot;: &quot;1950&quot;,
                &quot;stade&quot;: &quot;La Rabine&quot;,
                &quot;capacity&quot;: &quot;11415&quot;,
                &quot;website&quot;: &quot;http://www.rugbyclubvannes.bzh/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/RugbyClubVannes&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/RugbyClubVannes&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/rugbyclubvannes/&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UCcmJvevXM_U1OWchJwOJxbQ&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/7/74/Logo_RC_Vannes_-_2022.svg/1200px-Logo_RC_Vannes_-_2022.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 2,
                    &quot;team_id&quot;: 30
                }
            },
            {
                &quot;id&quot;: 59,
                &quot;created_at&quot;: &quot;2023-07-20T10:30:58.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2023-07-20T10:59:55.000000Z&quot;,
                &quot;name&quot;: &quot;Valence Romans Dr&ocirc;me Rugby&quot;,
                &quot;nickname&quot;: &quot;VRDR&quot;,
                &quot;foundation&quot;: &quot;2016&quot;,
                &quot;stade&quot;: &quot;Georges-Pompidou&quot;,
                &quot;capacity&quot;: &quot;15000&quot;,
                &quot;website&quot;: &quot;http://www.vrdr.fr/&quot;,
                &quot;facebook&quot;: &quot;https://fr-fr.facebook.com/VRDRrugby/&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/vrdrrugby&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/vrdrrugby/&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UCZUNaco8URaVgTHs0U961lw&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/7/7c/Logo_Valence_Romans_Dr%C3%B4me_Rugby_-_2019.svg/langfr-130px-Logo_Valence_Romans_Dr%C3%B4me_Rugby_-_2019.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 2,
                    &quot;team_id&quot;: 59
                }
            }
        ]
    },
    {
        &quot;id&quot;: 3,
        &quot;name&quot;: &quot;Premiership Rugby&quot;,
        &quot;creation&quot;: &quot;1987&quot;,
        &quot;last_champion&quot;: 41,
        &quot;most_successfull&quot;: 36,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/b/bd/Logo_Premiership_Rugby_2018.svg/langfr-180px-Logo_Premiership_Rugby_2018.svg.png&quot;,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: &quot;2023-07-20T10:46:18.000000Z&quot;,
        &quot;teams&quot;: [
            {
                &quot;id&quot;: 31,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Bath Rugby&quot;,
                &quot;nickname&quot;: &quot;BR&quot;,
                &quot;foundation&quot;: &quot;1865&quot;,
                &quot;stade&quot;: &quot;Recreation Ground&quot;,
                &quot;capacity&quot;: &quot;14000&quot;,
                &quot;website&quot;: &quot;https://www.bathrugby.com/&quot;,
                &quot;facebook&quot;: &quot;http://www.facebook.com/bathrugby&quot;,
                &quot;twitter&quot;: &quot;http://twitter.com/bathrugby&quot;,
                &quot;instagram&quot;: &quot;https://instagram.com/bathrugby/&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/user/BathRugbyTV&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/c/c3/Logo_Bath_Rugby_2014.svg/1200px-Logo_Bath_Rugby_2014.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 3,
                    &quot;team_id&quot;: 31
                }
            },
            {
                &quot;id&quot;: 32,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Bristol Bears&quot;,
                &quot;nickname&quot;: &quot;Bears&quot;,
                &quot;foundation&quot;: &quot;1888&quot;,
                &quot;stade&quot;: &quot;Ashton Gate Stadium&quot;,
                &quot;capacity&quot;: &quot;27000&quot;,
                &quot;website&quot;: &quot;https://www.bristolbearsrugby.com/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/bristolbears&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/BristolBears&quot;,
                &quot;instagram&quot;: &quot;https://instagram.com/bristolbearsrfc/&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/c/Bristolbearstv&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/5/5a/Logo_Bristol_Bears_2018.svg/1200px-Logo_Bristol_Bears_2018.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 3,
                    &quot;team_id&quot;: 32
                }
            },
            {
                &quot;id&quot;: 33,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Exeter Rugby Club&quot;,
                &quot;nickname&quot;: &quot;Chiefs&quot;,
                &quot;foundation&quot;: &quot;1871&quot;,
                &quot;stade&quot;: &quot;Sandy Park &quot;,
                &quot;capacity&quot;: &quot;12500&quot;,
                &quot;website&quot;: &quot;http://www.exeterchiefs.co.uk/&quot;,
                &quot;facebook&quot;: &quot;https://facebook.com/ExeterChiefs&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/ExeterChiefs&quot;,
                &quot;instagram&quot;: &quot;https://instagram.com/officialexeterchiefs/&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/user/officialexeterchiefs&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/e/e7/Logo_Exeter_Chiefs_2022.svg&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 3,
                    &quot;team_id&quot;: 33
                }
            },
            {
                &quot;id&quot;: 34,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Gloucester Rugby&quot;,
                &quot;nickname&quot;: &quot;Cherry and Whites&quot;,
                &quot;foundation&quot;: &quot;1873&quot;,
                &quot;stade&quot;: &quot;Kingsholm Stadium&quot;,
                &quot;capacity&quot;: &quot;16500&quot;,
                &quot;website&quot;: &quot;https://www.gloucesterrugby.co.uk/&quot;,
                &quot;facebook&quot;: &quot;https://facebook.com/GloucesterRugby&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/GloucesterRugby&quot;,
                &quot;instagram&quot;: &quot;https://instagram.com/officialGloucesterRugby&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/user/GloucesterRugbyTV&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/7/72/Logo_Gloucester_Rugby_2018.svg/1200px-Logo_Gloucester_Rugby_2018.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 3,
                    &quot;team_id&quot;: 34
                }
            },
            {
                &quot;id&quot;: 35,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Harlequins Football Club&quot;,
                &quot;nickname&quot;: &quot;Quins&quot;,
                &quot;foundation&quot;: &quot;1866&quot;,
                &quot;stade&quot;: &quot;The Stoop&quot;,
                &quot;capacity&quot;: &quot;14800&quot;,
                &quot;website&quot;: &quot;https://www.quins.co.uk/&quot;,
                &quot;facebook&quot;: &quot;https://en-gb.facebook.com/harlequins/&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/Harlequins&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/harlequins&quot;,
                &quot;youtube&quot;: &quot;&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/3/34/Logo_Harlequin_Football_Club_2011.svg/1200px-Logo_Harlequin_Football_Club_2011.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 3,
                    &quot;team_id&quot;: 35
                }
            },
            {
                &quot;id&quot;: 36,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Leicester Football Club&quot;,
                &quot;nickname&quot;: &quot;Tigers&quot;,
                &quot;foundation&quot;: &quot;1880&quot;,
                &quot;stade&quot;: &quot;Welford Road Staidum&quot;,
                &quot;capacity&quot;: &quot;24000&quot;,
                &quot;website&quot;: &quot;http://www.tigers.co.uk/home.php&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/leicestertigers&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/leicestertigers&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/leicestertigers/&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/user/LeicesterTigersLTTV&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/3/34/Logo_Harlequin_Football_Club_2011.svg/1200px-Logo_Harlequin_Football_Club_2011.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 3,
                    &quot;team_id&quot;: 36
                }
            },
            {
                &quot;id&quot;: 37,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;London Irish Football Club&quot;,
                &quot;nickname&quot;: &quot;The Exiles&quot;,
                &quot;foundation&quot;: &quot;1898&quot;,
                &quot;stade&quot;: &quot;Gtech Community Stadium&quot;,
                &quot;capacity&quot;: &quot;17250&quot;,
                &quot;website&quot;: &quot;www.london-irish.com&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/LIRFC&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/londonirish&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/londonirish1898/&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UCQYMvGMgRj8Yjbdv72hOgXA&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/9/90/Logo_London_Irish_2019.svg/1200px-Logo_London_Irish_2019.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 3,
                    &quot;team_id&quot;: 37
                }
            },
            {
                &quot;id&quot;: 38,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Newcastle Falcons&quot;,
                &quot;nickname&quot;: &quot;Falcons&quot;,
                &quot;foundation&quot;: &quot;1877&quot;,
                &quot;stade&quot;: &quot;Kingston Park&quot;,
                &quot;capacity&quot;: &quot;10200&quot;,
                &quot;website&quot;: &quot;http://www.newcastlefalcons.co.uk&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/newcastle.falcons&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/FalconsRugby&quot;,
                &quot;instagram&quot;: &quot;&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/user/NewcastleFalcons1&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/d/d7/Logo_Newcastle_Falcons.svg/1200px-Logo_Newcastle_Falcons.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 3,
                    &quot;team_id&quot;: 38
                }
            },
            {
                &quot;id&quot;: 39,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Northampton Saints Rugby Football Club&quot;,
                &quot;nickname&quot;: &quot;Saints&quot;,
                &quot;foundation&quot;: &quot;1880&quot;,
                &quot;stade&quot;: &quot;Franklin&#039;s Garden&quot;,
                &quot;capacity&quot;: &quot;15500&quot;,
                &quot;website&quot;: &quot;http://www.northamptonsaints.co.uk/&quot;,
                &quot;facebook&quot;: &quot;https://facebook.com/northamptonsaints&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/SaintsRugby&quot;,
                &quot;instagram&quot;: &quot;https://instagram.com/northamptonsaints&quot;,
                &quot;youtube&quot;: &quot;https://youtube.com/user/TheSaintsTV&quot;,
                &quot;logo&quot;: &quot;https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNmxktUnK8vEBaJUhNjtafLRLw7s7PqlxiDBWzkCo&amp;s&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 3,
                    &quot;team_id&quot;: 39
                }
            },
            {
                &quot;id&quot;: 40,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Sale Sharks Rugby Union Football Club&quot;,
                &quot;nickname&quot;: &quot;Sharks&quot;,
                &quot;foundation&quot;: &quot;1861&quot;,
                &quot;stade&quot;: &quot;AJ Bell Stadium&quot;,
                &quot;capacity&quot;: &quot;12000&quot;,
                &quot;website&quot;: &quot;https://www.salesharks.com/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/SaleSharksRugby/&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/SaleSharksRugby&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/salesharks/&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UC_k3xuhlC_jBgfpJdMqAKxw&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/3/34/Sale_Sharks_%28logo%29.svg/1200px-Sale_Sharks_%28logo%29.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 3,
                    &quot;team_id&quot;: 40
                }
            },
            {
                &quot;id&quot;: 41,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Saracens Football Club&quot;,
                &quot;nickname&quot;: &quot;Sarries&quot;,
                &quot;foundation&quot;: &quot;1876&quot;,
                &quot;stade&quot;: &quot;StoneX Stadium&quot;,
                &quot;capacity&quot;: &quot;15000&quot;,
                &quot;website&quot;: &quot;http://www.saracens.com/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/SaracensOfficial&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/Saracens&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/saracensofficial&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UCHZjhtppDSbFEXWA80d5WBw&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/0/05/Logo_Saracens_2021.svg/1200px-Logo_Saracens_2021.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 3,
                    &quot;team_id&quot;: 41
                }
            }
        ]
    },
    {
        &quot;id&quot;: 4,
        &quot;name&quot;: &quot;United Rugby Championship&quot;,
        &quot;creation&quot;: &quot;2001&quot;,
        &quot;last_champion&quot;: 50,
        &quot;most_successfull&quot;: 54,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/d/db/Logo_United_Rugby_Championship_2021.png/180px-Logo_United_Rugby_Championship_2021.png&quot;,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: &quot;2023-07-20T10:46:41.000000Z&quot;,
        &quot;teams&quot;: [
            {
                &quot;id&quot;: 42,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Bulls&quot;,
                &quot;nickname&quot;: &quot;The Bulls&quot;,
                &quot;foundation&quot;: &quot;1997&quot;,
                &quot;stade&quot;: &quot;Lotus Versfeld&quot;,
                &quot;capacity&quot;: &quot;51762&quot;,
                &quot;website&quot;: &quot;bullsrugby.co.za&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/BullsOfficial&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/BlueBullsRugby&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/blue_bulls_official/&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/user/VodacomBulls/feed&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/commons/5/55/Bulls-logo.jpg&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 4,
                    &quot;team_id&quot;: 42
                }
            },
            {
                &quot;id&quot;: 43,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Cardiff Rugby&quot;,
                &quot;nickname&quot;: &quot;Blues&quot;,
                &quot;foundation&quot;: &quot;2003&quot;,
                &quot;stade&quot;: &quot;Cardiff Arms Park&quot;,
                &quot;capacity&quot;: &quot;12500&quot;,
                &quot;website&quot;: &quot;https://www.cardiffrugby.wales/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/cardiffrugby1876&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/cardiff_rugby&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/cardiff.rugby/&quot;,
                &quot;youtube&quot;: &quot;&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/8/85/Logo_Cardiff_Rugby_2021.svg/1200px-Logo_Cardiff_Rugby_2021.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 4,
                    &quot;team_id&quot;: 43
                }
            },
            {
                &quot;id&quot;: 44,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Connacht Rugby&quot;,
                &quot;nickname&quot;: &quot;Greens&quot;,
                &quot;foundation&quot;: &quot;1885&quot;,
                &quot;stade&quot;: &quot;Galway Sportsground&quot;,
                &quot;capacity&quot;: &quot;8100&quot;,
                &quot;website&quot;: &quot;https://www.connachtrugby.ie/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/ConnachtRugby&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/connachtrugby&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/connachtrugby/&quot;,
                &quot;youtube&quot;: &quot;&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/8/85/Logo_Cardiff_Rugby_2021.svg/1200px-Logo_Cardiff_Rugby_2021.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 4,
                    &quot;team_id&quot;: 44
                }
            },
            {
                &quot;id&quot;: 45,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Edimbourg Rugby&quot;,
                &quot;nickname&quot;: &quot;Gunners&quot;,
                &quot;foundation&quot;: &quot;1872&quot;,
                &quot;stade&quot;: &quot;Murrayfield&quot;,
                &quot;capacity&quot;: &quot;67000&quot;,
                &quot;website&quot;: &quot;https://www.edinburghrugby.org/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/EdinburghRugby&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/EdinburghRugby&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/edinburghrugby&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/EdinburghRugbyTV&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/8/85/Logo_Cardiff_Rugby_2021.svg/1200px-Logo_Cardiff_Rugby_2021.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 4,
                    &quot;team_id&quot;: 45
                }
            },
            {
                &quot;id&quot;: 46,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Glasgow Warriors&quot;,
                &quot;nickname&quot;: &quot;Warriors&quot;,
                &quot;foundation&quot;: &quot;1872&quot;,
                &quot;stade&quot;: &quot;Scotstun Stadium&quot;,
                &quot;capacity&quot;: &quot;11000&quot;,
                &quot;website&quot;: &quot;http://www.glasgowwarriors.org/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/GlasgowWarriors&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/GlasgowWarriors&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/glasgowwarriors&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/glasgowwarriors&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/7/75/Logo_Glasgow_Warriors_2019.svg/1200px-Logo_Glasgow_Warriors_2019.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 4,
                    &quot;team_id&quot;: 46
                }
            },
            {
                &quot;id&quot;: 47,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Leinster Rugby&quot;,
                &quot;nickname&quot;: &quot;Boys in blue&quot;,
                &quot;foundation&quot;: &quot;1875&quot;,
                &quot;stade&quot;: &quot;RDS Arena&quot;,
                &quot;capacity&quot;: &quot;18500&quot;,
                &quot;website&quot;: &quot;http://www.leinsterrugby.ie/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/leinsterrugby/?fref=ts&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/leinsterrugby&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/leinsterrugby/?hl=en&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/user/LeinsterrugbyTV&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/2/2c/Logo_Leinster_Rugby.svg/1200px-Logo_Leinster_Rugby.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 4,
                    &quot;team_id&quot;: 47
                }
            },
            {
                &quot;id&quot;: 48,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Lions&quot;,
                &quot;nickname&quot;: &quot;Cats&quot;,
                &quot;foundation&quot;: &quot;1996&quot;,
                &quot;stade&quot;: &quot;Ellis Park Stadium&quot;,
                &quot;capacity&quot;: &quot;59611&quot;,
                &quot;website&quot;: &quot;http://www.lionsrugby.co.za/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/lionsrugbyco/&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/LionsRugbyCo&quot;,
                &quot;instagram&quot;: &quot;https://twitter.com/LionsRugbyCo&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UCdddB27Aoxea_QS0EyPJoRQ&quot;,
                &quot;logo&quot;: &quot;https://assets.stickpng.com/images/5ae2e50233b73fa43b1a8986.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 4,
                    &quot;team_id&quot;: 48
                }
            },
            {
                &quot;id&quot;: 49,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Scarlets&quot;,
                &quot;nickname&quot;: &quot;Scarlets&quot;,
                &quot;foundation&quot;: &quot;2003&quot;,
                &quot;stade&quot;: &quot;Parc y Scarlets&quot;,
                &quot;capacity&quot;: &quot;14870&quot;,
                &quot;website&quot;: &quot;https://www.scarlets.wales/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/OfficialScarlets/&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/scarlets_rugby&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/scarlets_rugby/&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UCSpQ51CzUYp_ambKRD7fDCg&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/0/03/Logo_Scarlets_2008.svg/1200px-Logo_Scarlets_2008.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 4,
                    &quot;team_id&quot;: 49
                }
            },
            {
                &quot;id&quot;: 50,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Munster Rugby&quot;,
                &quot;nickname&quot;: &quot;Red Army&quot;,
                &quot;foundation&quot;: &quot;1879&quot;,
                &quot;stade&quot;: &quot;Thomond Park&quot;,
                &quot;capacity&quot;: &quot;26500&quot;,
                &quot;website&quot;: &quot;http://www.munsterrugby.ie/&quot;,
                &quot;facebook&quot;: &quot;&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/MunsterRugby&quot;,
                &quot;instagram&quot;: &quot;https://twitter.com/MunsterRugby&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/user/MunsterView&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/9/94/Munster_Rugby_%28logo%29.svg/1200px-Munster_Rugby_%28logo%29.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 4,
                    &quot;team_id&quot;: 50
                }
            },
            {
                &quot;id&quot;: 51,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Dragons RFC&quot;,
                &quot;nickname&quot;: &quot;Dragons&quot;,
                &quot;foundation&quot;: &quot;2003&quot;,
                &quot;stade&quot;: &quot;Rodney Parade&quot;,
                &quot;capacity&quot;: &quot;11676&quot;,
                &quot;website&quot;: &quot;https://www.dragonsrugby.wales/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/dragonsrfc.wales/&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/dragonsrugby&quot;,
                &quot;instagram&quot;: &quot;https://twitter.com/dragonsrugby&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UCdB_8F9Yqur14jXdSzxyQeA&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/d/d1/Logo_Dragons_RFC_2022.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 4,
                    &quot;team_id&quot;: 51
                }
            },
            {
                &quot;id&quot;: 52,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Ospreys&quot;,
                &quot;nickname&quot;: &quot;Y Gweilch&quot;,
                &quot;foundation&quot;: &quot;2003&quot;,
                &quot;stade&quot;: &quot;Liberty Stadium&quot;,
                &quot;capacity&quot;: &quot;20000&quot;,
                &quot;website&quot;: &quot;http://www.ospreysrugby.com/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/ospreysrugby&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/ospreys&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/ospreys_official/&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/user/OspreysHighlights&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/7/7f/Logo_Ospreys.svg/1200px-Logo_Ospreys.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 4,
                    &quot;team_id&quot;: 52
                }
            },
            {
                &quot;id&quot;: 53,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Durban Sharks&quot;,
                &quot;nickname&quot;: &quot;Sharks&quot;,
                &quot;foundation&quot;: &quot;1996&quot;,
                &quot;stade&quot;: &quot;Kings Park Stadium&quot;,
                &quot;capacity&quot;: &quot;55000&quot;,
                &quot;website&quot;: &quot;http://www.sharksrugby.co.za/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/SharksRugby&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/SharksRugby&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/sharksrugby/&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/user/TheSharksZA&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/7/7b/CellCSharksRugbylogo.svg/1200px-CellCSharksRugbylogo.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 4,
                    &quot;team_id&quot;: 53
                }
            },
            {
                &quot;id&quot;: 54,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Stormers&quot;,
                &quot;nickname&quot;: &quot;The Stormers&quot;,
                &quot;foundation&quot;: &quot;1996&quot;,
                &quot;stade&quot;: &quot;Cape Town Stadium&quot;,
                &quot;capacity&quot;: &quot;55000&quot;,
                &quot;website&quot;: &quot;http://thestormers.com/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/stormers&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/thestormers&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/dhlstormers/&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/user/StormersTV&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/1/18/Logo_Stormers_Rugby.svg/1200px-Logo_Stormers_Rugby.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 4,
                    &quot;team_id&quot;: 54
                }
            },
            {
                &quot;id&quot;: 55,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Benetton Rugby Tr&eacute;vise&quot;,
                &quot;nickname&quot;: &quot;Benetton&quot;,
                &quot;foundation&quot;: &quot;1932&quot;,
                &quot;stade&quot;: &quot;Stadio Comunale di Monigo&quot;,
                &quot;capacity&quot;: &quot;6700&quot;,
                &quot;website&quot;: &quot;http://www.benettonrugby.it/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/BenettonRugbyTreviso&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/benettonrugby?lang=it&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/benettonrugby/&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/user/BenettonRugby&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/a/a3/Logo_Benetton_Rugby.svg/1200px-Logo_Benetton_Rugby.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 4,
                    &quot;team_id&quot;: 55
                }
            },
            {
                &quot;id&quot;: 56,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Ulster Rugby&quot;,
                &quot;nickname&quot;: &quot;UlsterMan&quot;,
                &quot;foundation&quot;: &quot;1872&quot;,
                &quot;stade&quot;: &quot;Ravenhill Stadium&quot;,
                &quot;capacity&quot;: &quot;18200&quot;,
                &quot;website&quot;: &quot;http://www.ulsterrugby.com/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/ulsterrugby/?utm_source=web&amp;utm_medium=footer&amp;utm_campaign=social-links&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/UlsterRugby?utm_source=web&amp;utm_medium=footer&amp;utm_campaign=social-links&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/officialulsterrugby&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/user/UlsterRugbyTV?sub_confirmation=1&quot;,
                &quot;logo&quot;: &quot;https://i.bleacherreport.net/images/team_logos/328x328/ulster_rugby.png?canvas=492,328&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 4,
                    &quot;team_id&quot;: 56
                }
            },
            {
                &quot;id&quot;: 57,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Z&egrave;bres Parma&quot;,
                &quot;nickname&quot;: &quot;Z&egrave;bra&quot;,
                &quot;foundation&quot;: &quot;1973&quot;,
                &quot;stade&quot;: &quot;Stadio XXV Aprile&quot;,
                &quot;capacity&quot;: &quot;5000&quot;,
                &quot;website&quot;: &quot;https://www.zebreparma.it/&quot;,
                &quot;facebook&quot;: &quot;https://www.zebreparma.it/it-it/facebook.aspx&quot;,
                &quot;twitter&quot;: &quot;https://www.zebreparma.it/it-it/twitter.aspx&quot;,
                &quot;instagram&quot;: &quot;https://www.zebreparma.it/it-it/instagram.aspx&quot;,
                &quot;youtube&quot;: &quot;https://www.zebreparma.it/it-it/youtube.aspx&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/b/b7/Logo_Zebre_Rugby_Club_2017.svg/1024px-Logo_Zebre_Rugby_Club_2017.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 4,
                    &quot;team_id&quot;: 57
                }
            }
        ]
    },
    {
        &quot;id&quot;: 5,
        &quot;name&quot;: &quot;Champion&#039;s Cup&quot;,
        &quot;creation&quot;: &quot;1995&quot;,
        &quot;last_champion&quot;: 11,
        &quot;most_successfull&quot;: 12,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/9/9a/Logo_Champions_Cup_2018.png/180px-Logo_Champions_Cup_2018.png&quot;,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: &quot;2023-07-20T10:47:23.000000Z&quot;,
        &quot;teams&quot;: [
            {
                &quot;id&quot;: 2,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Union Bordaux B&egrave;gles&quot;,
                &quot;nickname&quot;: &quot;UBB&quot;,
                &quot;foundation&quot;: &quot;2006&quot;,
                &quot;stade&quot;: &quot;Chaban-Delmas&quot;,
                &quot;capacity&quot;: &quot;34462&quot;,
                &quot;website&quot;: &quot;http://www.ubbrugby.com/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/ubbrugby&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/ubbrugby&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/ubbrugby&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UC0ofHgdtPGcNd21eVuBSWBQ&quot;,
                &quot;logo&quot;: &quot;https://www.ubbrugby.com/application/uploads/files/logo_UBB%20transparent.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 5,
                    &quot;team_id&quot;: 2
                }
            },
            {
                &quot;id&quot;: 6,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Lyon Olympique Universitaire&quot;,
                &quot;nickname&quot;: &quot;LOU&quot;,
                &quot;foundation&quot;: &quot;1896&quot;,
                &quot;stade&quot;: &quot;Matmut Stadium Gerland&quot;,
                &quot;capacity&quot;: &quot;35029&quot;,
                &quot;website&quot;: &quot;www.lourugby.fr&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/LOU.Rugby/&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/lelourugby?lang=fr&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/lourugby1896/?hl=fr&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UCAwMdlmJy1PmeeXwdZuTjXw&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/2/25/Lyon_olympique_universitaire.svg/1200px-Lyon_olympique_universitaire.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 5,
                    &quot;team_id&quot;: 6
                }
            },
            {
                &quot;id&quot;: 11,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Stade Rochelais&quot;,
                &quot;nickname&quot;: &quot;SR&quot;,
                &quot;foundation&quot;: &quot;1898&quot;,
                &quot;stade&quot;: &quot;Marcel Deflandre&quot;,
                &quot;capacity&quot;: &quot;16000&quot;,
                &quot;website&quot;: &quot;http://www.staderochelais.com/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/staderochelais&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/staderochelais&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/staderochelais&quot;,
                &quot;youtube&quot;: &quot;https://www.dailymotion.com/staderochelais&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/4/44/Logo_Stade_rochelais_2016.svg/1594px-Logo_Stade_rochelais_2016.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 5,
                    &quot;team_id&quot;: 11
                }
            },
            {
                &quot;id&quot;: 12,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Stade Toulousain&quot;,
                &quot;nickname&quot;: &quot;ST&quot;,
                &quot;foundation&quot;: &quot;1907&quot;,
                &quot;stade&quot;: &quot;Ernest Wallon&quot;,
                &quot;capacity&quot;: &quot;19000&quot;,
                &quot;website&quot;: &quot;www.stadetoulousain.fr&quot;,
                &quot;facebook&quot;: &quot;https://fr-fr.facebook.com/StadeToulousainOfficiel&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/StadeToulousain&quot;,
                &quot;instagram&quot;: &quot;http://instagram.com/stadetoulousainrugby&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/stadetoulousain&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/0/01/Logo_Stade_Toulousain_Rugby.svg&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 5,
                    &quot;team_id&quot;: 12
                }
            },
            {
                &quot;id&quot;: 14,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Racing 92&quot;,
                &quot;nickname&quot;: &quot;R92&quot;,
                &quot;foundation&quot;: &quot;1890&quot;,
                &quot;stade&quot;: &quot;Paris La D&eacute;fense Ar&eacute;na&quot;,
                &quot;capacity&quot;: &quot;32000&quot;,
                &quot;website&quot;: &quot;www.racing92.fr&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/Racing92Officiel/&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/Racing92&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/Racing92/&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UC4MQWtqrcD567vQIKyBJcsQ/&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/c/c7/Logo_Racing_92_2015.svg/640px-Logo_Racing_92_2015.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 5,
                    &quot;team_id&quot;: 14
                }
            },
            {
                &quot;id&quot;: 33,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Exeter Rugby Club&quot;,
                &quot;nickname&quot;: &quot;Chiefs&quot;,
                &quot;foundation&quot;: &quot;1871&quot;,
                &quot;stade&quot;: &quot;Sandy Park &quot;,
                &quot;capacity&quot;: &quot;12500&quot;,
                &quot;website&quot;: &quot;http://www.exeterchiefs.co.uk/&quot;,
                &quot;facebook&quot;: &quot;https://facebook.com/ExeterChiefs&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/ExeterChiefs&quot;,
                &quot;instagram&quot;: &quot;https://instagram.com/officialexeterchiefs/&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/user/officialexeterchiefs&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/e/e7/Logo_Exeter_Chiefs_2022.svg&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 5,
                    &quot;team_id&quot;: 33
                }
            },
            {
                &quot;id&quot;: 34,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Gloucester Rugby&quot;,
                &quot;nickname&quot;: &quot;Cherry and Whites&quot;,
                &quot;foundation&quot;: &quot;1873&quot;,
                &quot;stade&quot;: &quot;Kingsholm Stadium&quot;,
                &quot;capacity&quot;: &quot;16500&quot;,
                &quot;website&quot;: &quot;https://www.gloucesterrugby.co.uk/&quot;,
                &quot;facebook&quot;: &quot;https://facebook.com/GloucesterRugby&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/GloucesterRugby&quot;,
                &quot;instagram&quot;: &quot;https://instagram.com/officialGloucesterRugby&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/user/GloucesterRugbyTV&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/7/72/Logo_Gloucester_Rugby_2018.svg/1200px-Logo_Gloucester_Rugby_2018.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 5,
                    &quot;team_id&quot;: 34
                }
            },
            {
                &quot;id&quot;: 35,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Harlequins Football Club&quot;,
                &quot;nickname&quot;: &quot;Quins&quot;,
                &quot;foundation&quot;: &quot;1866&quot;,
                &quot;stade&quot;: &quot;The Stoop&quot;,
                &quot;capacity&quot;: &quot;14800&quot;,
                &quot;website&quot;: &quot;https://www.quins.co.uk/&quot;,
                &quot;facebook&quot;: &quot;https://en-gb.facebook.com/harlequins/&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/Harlequins&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/harlequins&quot;,
                &quot;youtube&quot;: &quot;&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/3/34/Logo_Harlequin_Football_Club_2011.svg/1200px-Logo_Harlequin_Football_Club_2011.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 5,
                    &quot;team_id&quot;: 35
                }
            },
            {
                &quot;id&quot;: 36,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Leicester Football Club&quot;,
                &quot;nickname&quot;: &quot;Tigers&quot;,
                &quot;foundation&quot;: &quot;1880&quot;,
                &quot;stade&quot;: &quot;Welford Road Staidum&quot;,
                &quot;capacity&quot;: &quot;24000&quot;,
                &quot;website&quot;: &quot;http://www.tigers.co.uk/home.php&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/leicestertigers&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/leicestertigers&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/leicestertigers/&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/user/LeicesterTigersLTTV&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/3/34/Logo_Harlequin_Football_Club_2011.svg/1200px-Logo_Harlequin_Football_Club_2011.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 5,
                    &quot;team_id&quot;: 36
                }
            },
            {
                &quot;id&quot;: 37,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;London Irish Football Club&quot;,
                &quot;nickname&quot;: &quot;The Exiles&quot;,
                &quot;foundation&quot;: &quot;1898&quot;,
                &quot;stade&quot;: &quot;Gtech Community Stadium&quot;,
                &quot;capacity&quot;: &quot;17250&quot;,
                &quot;website&quot;: &quot;www.london-irish.com&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/LIRFC&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/londonirish&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/londonirish1898/&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UCQYMvGMgRj8Yjbdv72hOgXA&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/9/90/Logo_London_Irish_2019.svg/1200px-Logo_London_Irish_2019.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 5,
                    &quot;team_id&quot;: 37
                }
            },
            {
                &quot;id&quot;: 39,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Northampton Saints Rugby Football Club&quot;,
                &quot;nickname&quot;: &quot;Saints&quot;,
                &quot;foundation&quot;: &quot;1880&quot;,
                &quot;stade&quot;: &quot;Franklin&#039;s Garden&quot;,
                &quot;capacity&quot;: &quot;15500&quot;,
                &quot;website&quot;: &quot;http://www.northamptonsaints.co.uk/&quot;,
                &quot;facebook&quot;: &quot;https://facebook.com/northamptonsaints&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/SaintsRugby&quot;,
                &quot;instagram&quot;: &quot;https://instagram.com/northamptonsaints&quot;,
                &quot;youtube&quot;: &quot;https://youtube.com/user/TheSaintsTV&quot;,
                &quot;logo&quot;: &quot;https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNmxktUnK8vEBaJUhNjtafLRLw7s7PqlxiDBWzkCo&amp;s&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 5,
                    &quot;team_id&quot;: 39
                }
            },
            {
                &quot;id&quot;: 40,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Sale Sharks Rugby Union Football Club&quot;,
                &quot;nickname&quot;: &quot;Sharks&quot;,
                &quot;foundation&quot;: &quot;1861&quot;,
                &quot;stade&quot;: &quot;AJ Bell Stadium&quot;,
                &quot;capacity&quot;: &quot;12000&quot;,
                &quot;website&quot;: &quot;https://www.salesharks.com/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/SaleSharksRugby/&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/SaleSharksRugby&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/salesharks/&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UC_k3xuhlC_jBgfpJdMqAKxw&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/3/34/Sale_Sharks_%28logo%29.svg/1200px-Sale_Sharks_%28logo%29.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 5,
                    &quot;team_id&quot;: 40
                }
            },
            {
                &quot;id&quot;: 41,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Saracens Football Club&quot;,
                &quot;nickname&quot;: &quot;Sarries&quot;,
                &quot;foundation&quot;: &quot;1876&quot;,
                &quot;stade&quot;: &quot;StoneX Stadium&quot;,
                &quot;capacity&quot;: &quot;15000&quot;,
                &quot;website&quot;: &quot;http://www.saracens.com/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/SaracensOfficial&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/Saracens&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/saracensofficial&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UCHZjhtppDSbFEXWA80d5WBw&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/0/05/Logo_Saracens_2021.svg/1200px-Logo_Saracens_2021.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 5,
                    &quot;team_id&quot;: 41
                }
            },
            {
                &quot;id&quot;: 42,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Bulls&quot;,
                &quot;nickname&quot;: &quot;The Bulls&quot;,
                &quot;foundation&quot;: &quot;1997&quot;,
                &quot;stade&quot;: &quot;Lotus Versfeld&quot;,
                &quot;capacity&quot;: &quot;51762&quot;,
                &quot;website&quot;: &quot;bullsrugby.co.za&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/BullsOfficial&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/BlueBullsRugby&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/blue_bulls_official/&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/user/VodacomBulls/feed&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/commons/5/55/Bulls-logo.jpg&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 5,
                    &quot;team_id&quot;: 42
                }
            },
            {
                &quot;id&quot;: 45,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Edimbourg Rugby&quot;,
                &quot;nickname&quot;: &quot;Gunners&quot;,
                &quot;foundation&quot;: &quot;1872&quot;,
                &quot;stade&quot;: &quot;Murrayfield&quot;,
                &quot;capacity&quot;: &quot;67000&quot;,
                &quot;website&quot;: &quot;https://www.edinburghrugby.org/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/EdinburghRugby&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/EdinburghRugby&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/edinburghrugby&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/EdinburghRugbyTV&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/8/85/Logo_Cardiff_Rugby_2021.svg/1200px-Logo_Cardiff_Rugby_2021.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 5,
                    &quot;team_id&quot;: 45
                }
            },
            {
                &quot;id&quot;: 47,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Leinster Rugby&quot;,
                &quot;nickname&quot;: &quot;Boys in blue&quot;,
                &quot;foundation&quot;: &quot;1875&quot;,
                &quot;stade&quot;: &quot;RDS Arena&quot;,
                &quot;capacity&quot;: &quot;18500&quot;,
                &quot;website&quot;: &quot;http://www.leinsterrugby.ie/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/leinsterrugby/?fref=ts&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/leinsterrugby&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/leinsterrugby/?hl=en&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/user/LeinsterrugbyTV&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/2/2c/Logo_Leinster_Rugby.svg/1200px-Logo_Leinster_Rugby.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 5,
                    &quot;team_id&quot;: 47
                }
            },
            {
                &quot;id&quot;: 49,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Scarlets&quot;,
                &quot;nickname&quot;: &quot;Scarlets&quot;,
                &quot;foundation&quot;: &quot;2003&quot;,
                &quot;stade&quot;: &quot;Parc y Scarlets&quot;,
                &quot;capacity&quot;: &quot;14870&quot;,
                &quot;website&quot;: &quot;https://www.scarlets.wales/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/OfficialScarlets/&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/scarlets_rugby&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/scarlets_rugby/&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UCSpQ51CzUYp_ambKRD7fDCg&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/0/03/Logo_Scarlets_2008.svg/1200px-Logo_Scarlets_2008.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 5,
                    &quot;team_id&quot;: 49
                }
            },
            {
                &quot;id&quot;: 50,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Munster Rugby&quot;,
                &quot;nickname&quot;: &quot;Red Army&quot;,
                &quot;foundation&quot;: &quot;1879&quot;,
                &quot;stade&quot;: &quot;Thomond Park&quot;,
                &quot;capacity&quot;: &quot;26500&quot;,
                &quot;website&quot;: &quot;http://www.munsterrugby.ie/&quot;,
                &quot;facebook&quot;: &quot;&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/MunsterRugby&quot;,
                &quot;instagram&quot;: &quot;https://twitter.com/MunsterRugby&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/user/MunsterView&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/9/94/Munster_Rugby_%28logo%29.svg/1200px-Munster_Rugby_%28logo%29.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 5,
                    &quot;team_id&quot;: 50
                }
            },
            {
                &quot;id&quot;: 52,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Ospreys&quot;,
                &quot;nickname&quot;: &quot;Y Gweilch&quot;,
                &quot;foundation&quot;: &quot;2003&quot;,
                &quot;stade&quot;: &quot;Liberty Stadium&quot;,
                &quot;capacity&quot;: &quot;20000&quot;,
                &quot;website&quot;: &quot;http://www.ospreysrugby.com/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/ospreysrugby&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/ospreys&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/ospreys_official/&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/user/OspreysHighlights&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/7/7f/Logo_Ospreys.svg/1200px-Logo_Ospreys.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 5,
                    &quot;team_id&quot;: 52
                }
            },
            {
                &quot;id&quot;: 53,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Durban Sharks&quot;,
                &quot;nickname&quot;: &quot;Sharks&quot;,
                &quot;foundation&quot;: &quot;1996&quot;,
                &quot;stade&quot;: &quot;Kings Park Stadium&quot;,
                &quot;capacity&quot;: &quot;55000&quot;,
                &quot;website&quot;: &quot;http://www.sharksrugby.co.za/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/SharksRugby&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/SharksRugby&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/sharksrugby/&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/user/TheSharksZA&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/7/7b/CellCSharksRugbylogo.svg/1200px-CellCSharksRugbylogo.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 5,
                    &quot;team_id&quot;: 53
                }
            },
            {
                &quot;id&quot;: 54,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Stormers&quot;,
                &quot;nickname&quot;: &quot;The Stormers&quot;,
                &quot;foundation&quot;: &quot;1996&quot;,
                &quot;stade&quot;: &quot;Cape Town Stadium&quot;,
                &quot;capacity&quot;: &quot;55000&quot;,
                &quot;website&quot;: &quot;http://thestormers.com/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/stormers&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/thestormers&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/dhlstormers/&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/user/StormersTV&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/1/18/Logo_Stormers_Rugby.svg/1200px-Logo_Stormers_Rugby.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 5,
                    &quot;team_id&quot;: 54
                }
            },
            {
                &quot;id&quot;: 56,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Ulster Rugby&quot;,
                &quot;nickname&quot;: &quot;UlsterMan&quot;,
                &quot;foundation&quot;: &quot;1872&quot;,
                &quot;stade&quot;: &quot;Ravenhill Stadium&quot;,
                &quot;capacity&quot;: &quot;18200&quot;,
                &quot;website&quot;: &quot;http://www.ulsterrugby.com/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/ulsterrugby/?utm_source=web&amp;utm_medium=footer&amp;utm_campaign=social-links&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/UlsterRugby?utm_source=web&amp;utm_medium=footer&amp;utm_campaign=social-links&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/officialulsterrugby&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/user/UlsterRugbyTV?sub_confirmation=1&quot;,
                &quot;logo&quot;: &quot;https://i.bleacherreport.net/images/team_logos/328x328/ulster_rugby.png?canvas=492,328&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 5,
                    &quot;team_id&quot;: 56
                }
            }
        ]
    },
    {
        &quot;id&quot;: 6,
        &quot;name&quot;: &quot;EPCR Challenge Cup&quot;,
        &quot;creation&quot;: &quot;1996&quot;,
        &quot;last_champion&quot;: 9,
        &quot;most_successfull&quot;: 5,
        &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/6/69/Logo_Challenge_Cup_2021.png/180px-Logo_Challenge_Cup_2021.png&quot;,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: &quot;2023-07-20T10:48:06.000000Z&quot;,
        &quot;teams&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Avirons Bayonnais&quot;,
                &quot;nickname&quot;: &quot;AB&quot;,
                &quot;foundation&quot;: &quot;1906&quot;,
                &quot;stade&quot;: &quot;Jean Dauger&quot;,
                &quot;capacity&quot;: &quot;18069&quot;,
                &quot;website&quot;: &quot;www.abrugby.fr&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/avironbayonnaisrugbypro&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/avironrugbypro&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/avironrugbypro/&quot;,
                &quot;youtube&quot;: &quot;&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/1/1b/Logo_Aviron_Bayonnais_Rugby_-_2022.svg/1936px-Logo_Aviron_Bayonnais_Rugby_-_2022.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 6,
                    &quot;team_id&quot;: 1
                }
            },
            {
                &quot;id&quot;: 4,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Castres Olympique&quot;,
                &quot;nickname&quot;: &quot;CO&quot;,
                &quot;foundation&quot;: &quot;1906&quot;,
                &quot;stade&quot;: &quot;Pierre-Fabre&quot;,
                &quot;capacity&quot;: &quot;12500&quot;,
                &quot;website&quot;: &quot;www.castres-olympique.com&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/CastresOlympiqueOfficiel&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/CastresRugby&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/castresrugby/&quot;,
                &quot;youtube&quot;: &quot;&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/9/94/Castres_Olympique.svg/999px-Castres_Olympique.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 6,
                    &quot;team_id&quot;: 4
                }
            },
            {
                &quot;id&quot;: 5,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Association Sportive Montferrandaise Clermont Auvergne&quot;,
                &quot;nickname&quot;: &quot;ASM&quot;,
                &quot;foundation&quot;: &quot;1911&quot;,
                &quot;stade&quot;: &quot;Marcel Michelin&quot;,
                &quot;capacity&quot;: &quot;19372&quot;,
                &quot;website&quot;: &quot;www.asm-rugby.com&quot;,
                &quot;facebook&quot;: &quot;https://fr-fr.facebook.com/asm.clermont.auvergne/&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/ASMOfficiel&quot;,
                &quot;instagram&quot;: &quot;&quot;,
                &quot;youtube&quot;: &quot;&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/a/a8/Logo_ASM_Clermont_Auvergne_2019.svg/1200px-Logo_ASM_Clermont_Auvergne_2019.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 6,
                    &quot;team_id&quot;: 5
                }
            },
            {
                &quot;id&quot;: 7,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Montpellier H&eacute;rault Rugby&quot;,
                &quot;nickname&quot;: &quot;MHR&quot;,
                &quot;foundation&quot;: &quot;1986&quot;,
                &quot;stade&quot;: &quot;GGL Stadium&quot;,
                &quot;capacity&quot;: &quot;15697&quot;,
                &quot;website&quot;: &quot;www.montpellier-rugby.com&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/Montpellier.Rugby&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/MHR_officiel&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/mhr_officiel&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/user/montpellierrugby?feature=results_main&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/d/d9/Logo_Montpellier_H%C3%A9rault_rugby_2013.svg/1200px-Logo_Montpellier_H%C3%A9rault_rugby_2013.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 6,
                    &quot;team_id&quot;: 7
                }
            },
            {
                &quot;id&quot;: 8,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Section Paloise&quot;,
                &quot;nickname&quot;: &quot;SP&quot;,
                &quot;foundation&quot;: &quot;1902&quot;,
                &quot;stade&quot;: &quot;Stade du Hameau&quot;,
                &quot;capacity&quot;: &quot;14588&quot;,
                &quot;website&quot;: &quot;http://www.section-paloise.com/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/SectionPaloiseBearnPyrenees&quot;,
                &quot;twitter&quot;: &quot;http://instagram.com/sectionpaloisebearnpyrenees&quot;,
                &quot;instagram&quot;: &quot;http://instagram.com/sectionpaloisebearnpyrenees&quot;,
                &quot;youtube&quot;: &quot;&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/9/91/Section_Paloise_logo.svg/1200px-Section_Paloise_logo.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 6,
                    &quot;team_id&quot;: 8
                }
            },
            {
                &quot;id&quot;: 9,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Rugby Club Toulonnais&quot;,
                &quot;nickname&quot;: &quot;RCT&quot;,
                &quot;foundation&quot;: &quot;1908&quot;,
                &quot;stade&quot;: &quot;Stade Mayol&quot;,
                &quot;capacity&quot;: &quot;17500&quot;,
                &quot;website&quot;: &quot;http://www.rctoulon.com/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/RCTofficiel&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/rctofficiel&quot;,
                &quot;instagram&quot;: &quot;https://instagram.com/rctofficiel/&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/c/RCTRugbyClubToulonnais&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/5/5a/Logo_Rugby_club_toulonnais.svg/1200px-Logo_Rugby_club_toulonnais.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 6,
                    &quot;team_id&quot;: 9
                }
            },
            {
                &quot;id&quot;: 10,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Stade Fran&ccedil;ais Paris&quot;,
                &quot;nickname&quot;: &quot;SFP&quot;,
                &quot;foundation&quot;: &quot;1883&quot;,
                &quot;stade&quot;: &quot;Jean-Bouin&quot;,
                &quot;capacity&quot;: &quot;25000&quot;,
                &quot;website&quot;: &quot;www.stade.fr&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/SFPARIS&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/SFParisRugby&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/stade_francais_paris/&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UC9HI0fd8SE_IfSaFkVKfPLA&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/0/0f/Logo_Stade_fran%C3%A7ais_PR_2018.svg/1200px-Logo_Stade_fran%C3%A7ais_PR_2018.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 6,
                    &quot;team_id&quot;: 10
                }
            },
            {
                &quot;id&quot;: 13,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Union Sportive Arlequins Perpignanais&quot;,
                &quot;nickname&quot;: &quot;USAP&quot;,
                &quot;foundation&quot;: &quot;1902&quot;,
                &quot;stade&quot;: &quot;Aim&eacute;-Giral&quot;,
                &quot;capacity&quot;: &quot;14593&quot;,
                &quot;website&quot;: &quot;www.usap.fr&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/USAPOfficiel&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/usap_officiel&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/usapofficiel/&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UCUZuZFU1VeHD9ZJJ3t3wnsQ&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/7/77/Logo_USA_Perpignan_2017.svg/1200px-Logo_USA_Perpignan_2017.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 6,
                    &quot;team_id&quot;: 13
                }
            },
            {
                &quot;id&quot;: 28,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Oyonnax Rugby&quot;,
                &quot;nickname&quot;: &quot;OYO&quot;,
                &quot;foundation&quot;: &quot;1909&quot;,
                &quot;stade&quot;: &quot;Charles Mathon&quot;,
                &quot;capacity&quot;: &quot;11400&quot;,
                &quot;website&quot;: &quot;http://www.oyonnaxrugby.com/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/OyonnaxRugbyOfficiel&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/OyonnaxRugby&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/oyonnaxrugby/?hl=fr&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UCf7BLip3jg_Vod8RRJa7T6Q&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/9/9d/Logo_Oyonnax_rugby_2018.svg/1200px-Logo_Oyonnax_rugby_2018.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 6,
                    &quot;team_id&quot;: 28
                }
            },
            {
                &quot;id&quot;: 31,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Bath Rugby&quot;,
                &quot;nickname&quot;: &quot;BR&quot;,
                &quot;foundation&quot;: &quot;1865&quot;,
                &quot;stade&quot;: &quot;Recreation Ground&quot;,
                &quot;capacity&quot;: &quot;14000&quot;,
                &quot;website&quot;: &quot;https://www.bathrugby.com/&quot;,
                &quot;facebook&quot;: &quot;http://www.facebook.com/bathrugby&quot;,
                &quot;twitter&quot;: &quot;http://twitter.com/bathrugby&quot;,
                &quot;instagram&quot;: &quot;https://instagram.com/bathrugby/&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/user/BathRugbyTV&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/c/c3/Logo_Bath_Rugby_2014.svg/1200px-Logo_Bath_Rugby_2014.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 6,
                    &quot;team_id&quot;: 31
                }
            },
            {
                &quot;id&quot;: 32,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Bristol Bears&quot;,
                &quot;nickname&quot;: &quot;Bears&quot;,
                &quot;foundation&quot;: &quot;1888&quot;,
                &quot;stade&quot;: &quot;Ashton Gate Stadium&quot;,
                &quot;capacity&quot;: &quot;27000&quot;,
                &quot;website&quot;: &quot;https://www.bristolbearsrugby.com/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/bristolbears&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/BristolBears&quot;,
                &quot;instagram&quot;: &quot;https://instagram.com/bristolbearsrfc/&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/c/Bristolbearstv&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/5/5a/Logo_Bristol_Bears_2018.svg/1200px-Logo_Bristol_Bears_2018.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 6,
                    &quot;team_id&quot;: 32
                }
            },
            {
                &quot;id&quot;: 38,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Newcastle Falcons&quot;,
                &quot;nickname&quot;: &quot;Falcons&quot;,
                &quot;foundation&quot;: &quot;1877&quot;,
                &quot;stade&quot;: &quot;Kingston Park&quot;,
                &quot;capacity&quot;: &quot;10200&quot;,
                &quot;website&quot;: &quot;http://www.newcastlefalcons.co.uk&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/newcastle.falcons&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/FalconsRugby&quot;,
                &quot;instagram&quot;: &quot;&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/user/NewcastleFalcons1&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/d/d7/Logo_Newcastle_Falcons.svg/1200px-Logo_Newcastle_Falcons.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 6,
                    &quot;team_id&quot;: 38
                }
            },
            {
                &quot;id&quot;: 43,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Cardiff Rugby&quot;,
                &quot;nickname&quot;: &quot;Blues&quot;,
                &quot;foundation&quot;: &quot;2003&quot;,
                &quot;stade&quot;: &quot;Cardiff Arms Park&quot;,
                &quot;capacity&quot;: &quot;12500&quot;,
                &quot;website&quot;: &quot;https://www.cardiffrugby.wales/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/cardiffrugby1876&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/cardiff_rugby&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/cardiff.rugby/&quot;,
                &quot;youtube&quot;: &quot;&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/8/85/Logo_Cardiff_Rugby_2021.svg/1200px-Logo_Cardiff_Rugby_2021.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 6,
                    &quot;team_id&quot;: 43
                }
            },
            {
                &quot;id&quot;: 44,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Connacht Rugby&quot;,
                &quot;nickname&quot;: &quot;Greens&quot;,
                &quot;foundation&quot;: &quot;1885&quot;,
                &quot;stade&quot;: &quot;Galway Sportsground&quot;,
                &quot;capacity&quot;: &quot;8100&quot;,
                &quot;website&quot;: &quot;https://www.connachtrugby.ie/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/ConnachtRugby&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/connachtrugby&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/connachtrugby/&quot;,
                &quot;youtube&quot;: &quot;&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/8/85/Logo_Cardiff_Rugby_2021.svg/1200px-Logo_Cardiff_Rugby_2021.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 6,
                    &quot;team_id&quot;: 44
                }
            },
            {
                &quot;id&quot;: 46,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Glasgow Warriors&quot;,
                &quot;nickname&quot;: &quot;Warriors&quot;,
                &quot;foundation&quot;: &quot;1872&quot;,
                &quot;stade&quot;: &quot;Scotstun Stadium&quot;,
                &quot;capacity&quot;: &quot;11000&quot;,
                &quot;website&quot;: &quot;http://www.glasgowwarriors.org/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/GlasgowWarriors&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/GlasgowWarriors&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/glasgowwarriors&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/glasgowwarriors&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/7/75/Logo_Glasgow_Warriors_2019.svg/1200px-Logo_Glasgow_Warriors_2019.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 6,
                    &quot;team_id&quot;: 46
                }
            },
            {
                &quot;id&quot;: 48,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Lions&quot;,
                &quot;nickname&quot;: &quot;Cats&quot;,
                &quot;foundation&quot;: &quot;1996&quot;,
                &quot;stade&quot;: &quot;Ellis Park Stadium&quot;,
                &quot;capacity&quot;: &quot;59611&quot;,
                &quot;website&quot;: &quot;http://www.lionsrugby.co.za/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/lionsrugbyco/&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/LionsRugbyCo&quot;,
                &quot;instagram&quot;: &quot;https://twitter.com/LionsRugbyCo&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UCdddB27Aoxea_QS0EyPJoRQ&quot;,
                &quot;logo&quot;: &quot;https://assets.stickpng.com/images/5ae2e50233b73fa43b1a8986.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 6,
                    &quot;team_id&quot;: 48
                }
            },
            {
                &quot;id&quot;: 51,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Dragons RFC&quot;,
                &quot;nickname&quot;: &quot;Dragons&quot;,
                &quot;foundation&quot;: &quot;2003&quot;,
                &quot;stade&quot;: &quot;Rodney Parade&quot;,
                &quot;capacity&quot;: &quot;11676&quot;,
                &quot;website&quot;: &quot;https://www.dragonsrugby.wales/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/dragonsrfc.wales/&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/dragonsrugby&quot;,
                &quot;instagram&quot;: &quot;https://twitter.com/dragonsrugby&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UCdB_8F9Yqur14jXdSzxyQeA&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/d/d1/Logo_Dragons_RFC_2022.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 6,
                    &quot;team_id&quot;: 51
                }
            },
            {
                &quot;id&quot;: 55,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Benetton Rugby Tr&eacute;vise&quot;,
                &quot;nickname&quot;: &quot;Benetton&quot;,
                &quot;foundation&quot;: &quot;1932&quot;,
                &quot;stade&quot;: &quot;Stadio Comunale di Monigo&quot;,
                &quot;capacity&quot;: &quot;6700&quot;,
                &quot;website&quot;: &quot;http://www.benettonrugby.it/&quot;,
                &quot;facebook&quot;: &quot;https://www.facebook.com/BenettonRugbyTreviso&quot;,
                &quot;twitter&quot;: &quot;https://twitter.com/benettonrugby?lang=it&quot;,
                &quot;instagram&quot;: &quot;https://www.instagram.com/benettonrugby/&quot;,
                &quot;youtube&quot;: &quot;https://www.youtube.com/user/BenettonRugby&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/a/a3/Logo_Benetton_Rugby.svg/1200px-Logo_Benetton_Rugby.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 6,
                    &quot;team_id&quot;: 55
                }
            },
            {
                &quot;id&quot;: 57,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;name&quot;: &quot;Z&egrave;bres Parma&quot;,
                &quot;nickname&quot;: &quot;Z&egrave;bra&quot;,
                &quot;foundation&quot;: &quot;1973&quot;,
                &quot;stade&quot;: &quot;Stadio XXV Aprile&quot;,
                &quot;capacity&quot;: &quot;5000&quot;,
                &quot;website&quot;: &quot;https://www.zebreparma.it/&quot;,
                &quot;facebook&quot;: &quot;https://www.zebreparma.it/it-it/facebook.aspx&quot;,
                &quot;twitter&quot;: &quot;https://www.zebreparma.it/it-it/twitter.aspx&quot;,
                &quot;instagram&quot;: &quot;https://www.zebreparma.it/it-it/instagram.aspx&quot;,
                &quot;youtube&quot;: &quot;https://www.zebreparma.it/it-it/youtube.aspx&quot;,
                &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/b/b7/Logo_Zebre_Rugby_Club_2017.svg/1024px-Logo_Zebre_Rugby_Club_2017.svg.png&quot;,
                &quot;pivot&quot;: {
                    &quot;league_id&quot;: 6,
                    &quot;team_id&quot;: 57
                }
            }
        ]
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-leagues" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-leagues"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-leagues"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-leagues" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-leagues">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-leagues" data-method="GET"
      data-path="api/leagues"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-leagues', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-leagues"
                    onclick="tryItOut('GETapi-leagues');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-leagues"
                    onclick="cancelTryOut('GETapi-leagues');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-leagues"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/leagues</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-leagues"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-leagues"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-leagues">Store a newly created resource in storage.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-leagues">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "/api/leagues" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"jzezkzigjbrdbnjsupsdfvgc\",
    \"creation\": \"bgmq\",
    \"last_champion\": 6,
    \"most_successfull\": 12,
    \"logo\": \"nesciunt\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "/api/leagues"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "jzezkzigjbrdbnjsupsdfvgc",
    "creation": "bgmq",
    "last_champion": 6,
    "most_successfull": 12,
    "logo": "nesciunt"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    '/api/leagues',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'jzezkzigjbrdbnjsupsdfvgc',
            'creation' =&gt; 'bgmq',
            'last_champion' =&gt; 6,
            'most_successfull' =&gt; 12,
            'logo' =&gt; 'nesciunt',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-leagues">
</span>
<span id="execution-results-POSTapi-leagues" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-leagues"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-leagues"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-leagues" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-leagues">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-leagues" data-method="POST"
      data-path="api/leagues"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-leagues', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-leagues"
                    onclick="tryItOut('POSTapi-leagues');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-leagues"
                    onclick="cancelTryOut('POSTapi-leagues');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-leagues"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/leagues</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-leagues"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-leagues"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-leagues"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-leagues"
               value="jzezkzigjbrdbnjsupsdfvgc"
               data-component="body">
    <br>
<p>Must not be greater than 75 characters. Example: <code>jzezkzigjbrdbnjsupsdfvgc</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>creation</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="creation"                data-endpoint="POSTapi-leagues"
               value="bgmq"
               data-component="body">
    <br>
<p>Must not be greater than 4 characters. Example: <code>bgmq</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>last_champion</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="last_champion"                data-endpoint="POSTapi-leagues"
               value="6"
               data-component="body">
    <br>
<p>Example: <code>6</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>most_successfull</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="most_successfull"                data-endpoint="POSTapi-leagues"
               value="12"
               data-component="body">
    <br>
<p>Example: <code>12</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>logo</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="logo"                data-endpoint="POSTapi-leagues"
               value="nesciunt"
               data-component="body">
    <br>
<p>Example: <code>nesciunt</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-leagues--league_id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-leagues--league_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "/api/leagues/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "/api/leagues/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    '/api/leagues/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-leagues--league_id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 55
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;name&quot;: &quot;Top 14&quot;,
    &quot;creation&quot;: &quot;1892&quot;,
    &quot;last_champion&quot;: 12,
    &quot;most_successfull&quot;: 12,
    &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/3/3a/Top_14.svg/langfr-180px-Top_14.svg.png&quot;,
    &quot;created_at&quot;: null,
    &quot;updated_at&quot;: &quot;2023-07-20T10:45:08.000000Z&quot;,
    &quot;teams&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;name&quot;: &quot;Avirons Bayonnais&quot;,
            &quot;nickname&quot;: &quot;AB&quot;,
            &quot;foundation&quot;: &quot;1906&quot;,
            &quot;stade&quot;: &quot;Jean Dauger&quot;,
            &quot;capacity&quot;: &quot;18069&quot;,
            &quot;website&quot;: &quot;www.abrugby.fr&quot;,
            &quot;facebook&quot;: &quot;https://www.facebook.com/avironbayonnaisrugbypro&quot;,
            &quot;twitter&quot;: &quot;https://twitter.com/avironrugbypro&quot;,
            &quot;instagram&quot;: &quot;https://www.instagram.com/avironrugbypro/&quot;,
            &quot;youtube&quot;: &quot;&quot;,
            &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/1/1b/Logo_Aviron_Bayonnais_Rugby_-_2022.svg/1936px-Logo_Aviron_Bayonnais_Rugby_-_2022.svg.png&quot;,
            &quot;pivot&quot;: {
                &quot;league_id&quot;: 1,
                &quot;team_id&quot;: 1
            }
        },
        {
            &quot;id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;name&quot;: &quot;Union Bordaux B&egrave;gles&quot;,
            &quot;nickname&quot;: &quot;UBB&quot;,
            &quot;foundation&quot;: &quot;2006&quot;,
            &quot;stade&quot;: &quot;Chaban-Delmas&quot;,
            &quot;capacity&quot;: &quot;34462&quot;,
            &quot;website&quot;: &quot;http://www.ubbrugby.com/&quot;,
            &quot;facebook&quot;: &quot;https://www.facebook.com/ubbrugby&quot;,
            &quot;twitter&quot;: &quot;https://twitter.com/ubbrugby&quot;,
            &quot;instagram&quot;: &quot;https://www.instagram.com/ubbrugby&quot;,
            &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UC0ofHgdtPGcNd21eVuBSWBQ&quot;,
            &quot;logo&quot;: &quot;https://www.ubbrugby.com/application/uploads/files/logo_UBB%20transparent.png&quot;,
            &quot;pivot&quot;: {
                &quot;league_id&quot;: 1,
                &quot;team_id&quot;: 2
            }
        },
        {
            &quot;id&quot;: 4,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;name&quot;: &quot;Castres Olympique&quot;,
            &quot;nickname&quot;: &quot;CO&quot;,
            &quot;foundation&quot;: &quot;1906&quot;,
            &quot;stade&quot;: &quot;Pierre-Fabre&quot;,
            &quot;capacity&quot;: &quot;12500&quot;,
            &quot;website&quot;: &quot;www.castres-olympique.com&quot;,
            &quot;facebook&quot;: &quot;https://www.facebook.com/CastresOlympiqueOfficiel&quot;,
            &quot;twitter&quot;: &quot;https://twitter.com/CastresRugby&quot;,
            &quot;instagram&quot;: &quot;https://www.instagram.com/castresrugby/&quot;,
            &quot;youtube&quot;: &quot;&quot;,
            &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/9/94/Castres_Olympique.svg/999px-Castres_Olympique.svg.png&quot;,
            &quot;pivot&quot;: {
                &quot;league_id&quot;: 1,
                &quot;team_id&quot;: 4
            }
        },
        {
            &quot;id&quot;: 5,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;name&quot;: &quot;Association Sportive Montferrandaise Clermont Auvergne&quot;,
            &quot;nickname&quot;: &quot;ASM&quot;,
            &quot;foundation&quot;: &quot;1911&quot;,
            &quot;stade&quot;: &quot;Marcel Michelin&quot;,
            &quot;capacity&quot;: &quot;19372&quot;,
            &quot;website&quot;: &quot;www.asm-rugby.com&quot;,
            &quot;facebook&quot;: &quot;https://fr-fr.facebook.com/asm.clermont.auvergne/&quot;,
            &quot;twitter&quot;: &quot;https://twitter.com/ASMOfficiel&quot;,
            &quot;instagram&quot;: &quot;&quot;,
            &quot;youtube&quot;: &quot;&quot;,
            &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/a/a8/Logo_ASM_Clermont_Auvergne_2019.svg/1200px-Logo_ASM_Clermont_Auvergne_2019.svg.png&quot;,
            &quot;pivot&quot;: {
                &quot;league_id&quot;: 1,
                &quot;team_id&quot;: 5
            }
        },
        {
            &quot;id&quot;: 6,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;name&quot;: &quot;Lyon Olympique Universitaire&quot;,
            &quot;nickname&quot;: &quot;LOU&quot;,
            &quot;foundation&quot;: &quot;1896&quot;,
            &quot;stade&quot;: &quot;Matmut Stadium Gerland&quot;,
            &quot;capacity&quot;: &quot;35029&quot;,
            &quot;website&quot;: &quot;www.lourugby.fr&quot;,
            &quot;facebook&quot;: &quot;https://www.facebook.com/LOU.Rugby/&quot;,
            &quot;twitter&quot;: &quot;https://twitter.com/lelourugby?lang=fr&quot;,
            &quot;instagram&quot;: &quot;https://www.instagram.com/lourugby1896/?hl=fr&quot;,
            &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UCAwMdlmJy1PmeeXwdZuTjXw&quot;,
            &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/2/25/Lyon_olympique_universitaire.svg/1200px-Lyon_olympique_universitaire.svg.png&quot;,
            &quot;pivot&quot;: {
                &quot;league_id&quot;: 1,
                &quot;team_id&quot;: 6
            }
        },
        {
            &quot;id&quot;: 7,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;name&quot;: &quot;Montpellier H&eacute;rault Rugby&quot;,
            &quot;nickname&quot;: &quot;MHR&quot;,
            &quot;foundation&quot;: &quot;1986&quot;,
            &quot;stade&quot;: &quot;GGL Stadium&quot;,
            &quot;capacity&quot;: &quot;15697&quot;,
            &quot;website&quot;: &quot;www.montpellier-rugby.com&quot;,
            &quot;facebook&quot;: &quot;https://www.facebook.com/Montpellier.Rugby&quot;,
            &quot;twitter&quot;: &quot;https://twitter.com/MHR_officiel&quot;,
            &quot;instagram&quot;: &quot;https://www.instagram.com/mhr_officiel&quot;,
            &quot;youtube&quot;: &quot;https://www.youtube.com/user/montpellierrugby?feature=results_main&quot;,
            &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/d/d9/Logo_Montpellier_H%C3%A9rault_rugby_2013.svg/1200px-Logo_Montpellier_H%C3%A9rault_rugby_2013.svg.png&quot;,
            &quot;pivot&quot;: {
                &quot;league_id&quot;: 1,
                &quot;team_id&quot;: 7
            }
        },
        {
            &quot;id&quot;: 8,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;name&quot;: &quot;Section Paloise&quot;,
            &quot;nickname&quot;: &quot;SP&quot;,
            &quot;foundation&quot;: &quot;1902&quot;,
            &quot;stade&quot;: &quot;Stade du Hameau&quot;,
            &quot;capacity&quot;: &quot;14588&quot;,
            &quot;website&quot;: &quot;http://www.section-paloise.com/&quot;,
            &quot;facebook&quot;: &quot;https://www.facebook.com/SectionPaloiseBearnPyrenees&quot;,
            &quot;twitter&quot;: &quot;http://instagram.com/sectionpaloisebearnpyrenees&quot;,
            &quot;instagram&quot;: &quot;http://instagram.com/sectionpaloisebearnpyrenees&quot;,
            &quot;youtube&quot;: &quot;&quot;,
            &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/9/91/Section_Paloise_logo.svg/1200px-Section_Paloise_logo.svg.png&quot;,
            &quot;pivot&quot;: {
                &quot;league_id&quot;: 1,
                &quot;team_id&quot;: 8
            }
        },
        {
            &quot;id&quot;: 9,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;name&quot;: &quot;Rugby Club Toulonnais&quot;,
            &quot;nickname&quot;: &quot;RCT&quot;,
            &quot;foundation&quot;: &quot;1908&quot;,
            &quot;stade&quot;: &quot;Stade Mayol&quot;,
            &quot;capacity&quot;: &quot;17500&quot;,
            &quot;website&quot;: &quot;http://www.rctoulon.com/&quot;,
            &quot;facebook&quot;: &quot;https://www.facebook.com/RCTofficiel&quot;,
            &quot;twitter&quot;: &quot;https://twitter.com/rctofficiel&quot;,
            &quot;instagram&quot;: &quot;https://instagram.com/rctofficiel/&quot;,
            &quot;youtube&quot;: &quot;https://www.youtube.com/c/RCTRugbyClubToulonnais&quot;,
            &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/5/5a/Logo_Rugby_club_toulonnais.svg/1200px-Logo_Rugby_club_toulonnais.svg.png&quot;,
            &quot;pivot&quot;: {
                &quot;league_id&quot;: 1,
                &quot;team_id&quot;: 9
            }
        },
        {
            &quot;id&quot;: 10,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;name&quot;: &quot;Stade Fran&ccedil;ais Paris&quot;,
            &quot;nickname&quot;: &quot;SFP&quot;,
            &quot;foundation&quot;: &quot;1883&quot;,
            &quot;stade&quot;: &quot;Jean-Bouin&quot;,
            &quot;capacity&quot;: &quot;25000&quot;,
            &quot;website&quot;: &quot;www.stade.fr&quot;,
            &quot;facebook&quot;: &quot;https://www.facebook.com/SFPARIS&quot;,
            &quot;twitter&quot;: &quot;https://twitter.com/SFParisRugby&quot;,
            &quot;instagram&quot;: &quot;https://www.instagram.com/stade_francais_paris/&quot;,
            &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UC9HI0fd8SE_IfSaFkVKfPLA&quot;,
            &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/0/0f/Logo_Stade_fran%C3%A7ais_PR_2018.svg/1200px-Logo_Stade_fran%C3%A7ais_PR_2018.svg.png&quot;,
            &quot;pivot&quot;: {
                &quot;league_id&quot;: 1,
                &quot;team_id&quot;: 10
            }
        },
        {
            &quot;id&quot;: 11,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;name&quot;: &quot;Stade Rochelais&quot;,
            &quot;nickname&quot;: &quot;SR&quot;,
            &quot;foundation&quot;: &quot;1898&quot;,
            &quot;stade&quot;: &quot;Marcel Deflandre&quot;,
            &quot;capacity&quot;: &quot;16000&quot;,
            &quot;website&quot;: &quot;http://www.staderochelais.com/&quot;,
            &quot;facebook&quot;: &quot;https://www.facebook.com/staderochelais&quot;,
            &quot;twitter&quot;: &quot;https://twitter.com/staderochelais&quot;,
            &quot;instagram&quot;: &quot;https://www.instagram.com/staderochelais&quot;,
            &quot;youtube&quot;: &quot;https://www.dailymotion.com/staderochelais&quot;,
            &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/4/44/Logo_Stade_rochelais_2016.svg/1594px-Logo_Stade_rochelais_2016.svg.png&quot;,
            &quot;pivot&quot;: {
                &quot;league_id&quot;: 1,
                &quot;team_id&quot;: 11
            }
        },
        {
            &quot;id&quot;: 12,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;name&quot;: &quot;Stade Toulousain&quot;,
            &quot;nickname&quot;: &quot;ST&quot;,
            &quot;foundation&quot;: &quot;1907&quot;,
            &quot;stade&quot;: &quot;Ernest Wallon&quot;,
            &quot;capacity&quot;: &quot;19000&quot;,
            &quot;website&quot;: &quot;www.stadetoulousain.fr&quot;,
            &quot;facebook&quot;: &quot;https://fr-fr.facebook.com/StadeToulousainOfficiel&quot;,
            &quot;twitter&quot;: &quot;https://twitter.com/StadeToulousain&quot;,
            &quot;instagram&quot;: &quot;http://instagram.com/stadetoulousainrugby&quot;,
            &quot;youtube&quot;: &quot;https://www.youtube.com/stadetoulousain&quot;,
            &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/0/01/Logo_Stade_Toulousain_Rugby.svg&quot;,
            &quot;pivot&quot;: {
                &quot;league_id&quot;: 1,
                &quot;team_id&quot;: 12
            }
        },
        {
            &quot;id&quot;: 13,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;name&quot;: &quot;Union Sportive Arlequins Perpignanais&quot;,
            &quot;nickname&quot;: &quot;USAP&quot;,
            &quot;foundation&quot;: &quot;1902&quot;,
            &quot;stade&quot;: &quot;Aim&eacute;-Giral&quot;,
            &quot;capacity&quot;: &quot;14593&quot;,
            &quot;website&quot;: &quot;www.usap.fr&quot;,
            &quot;facebook&quot;: &quot;https://www.facebook.com/USAPOfficiel&quot;,
            &quot;twitter&quot;: &quot;https://twitter.com/usap_officiel&quot;,
            &quot;instagram&quot;: &quot;https://www.instagram.com/usapofficiel/&quot;,
            &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UCUZuZFU1VeHD9ZJJ3t3wnsQ&quot;,
            &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/7/77/Logo_USA_Perpignan_2017.svg/1200px-Logo_USA_Perpignan_2017.svg.png&quot;,
            &quot;pivot&quot;: {
                &quot;league_id&quot;: 1,
                &quot;team_id&quot;: 13
            }
        },
        {
            &quot;id&quot;: 14,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;name&quot;: &quot;Racing 92&quot;,
            &quot;nickname&quot;: &quot;R92&quot;,
            &quot;foundation&quot;: &quot;1890&quot;,
            &quot;stade&quot;: &quot;Paris La D&eacute;fense Ar&eacute;na&quot;,
            &quot;capacity&quot;: &quot;32000&quot;,
            &quot;website&quot;: &quot;www.racing92.fr&quot;,
            &quot;facebook&quot;: &quot;https://www.facebook.com/Racing92Officiel/&quot;,
            &quot;twitter&quot;: &quot;https://twitter.com/Racing92&quot;,
            &quot;instagram&quot;: &quot;https://www.instagram.com/Racing92/&quot;,
            &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UC4MQWtqrcD567vQIKyBJcsQ/&quot;,
            &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/c/c7/Logo_Racing_92_2015.svg/640px-Logo_Racing_92_2015.svg.png&quot;,
            &quot;pivot&quot;: {
                &quot;league_id&quot;: 1,
                &quot;team_id&quot;: 14
            }
        },
        {
            &quot;id&quot;: 28,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;name&quot;: &quot;Oyonnax Rugby&quot;,
            &quot;nickname&quot;: &quot;OYO&quot;,
            &quot;foundation&quot;: &quot;1909&quot;,
            &quot;stade&quot;: &quot;Charles Mathon&quot;,
            &quot;capacity&quot;: &quot;11400&quot;,
            &quot;website&quot;: &quot;http://www.oyonnaxrugby.com/&quot;,
            &quot;facebook&quot;: &quot;https://www.facebook.com/OyonnaxRugbyOfficiel&quot;,
            &quot;twitter&quot;: &quot;https://twitter.com/OyonnaxRugby&quot;,
            &quot;instagram&quot;: &quot;https://www.instagram.com/oyonnaxrugby/?hl=fr&quot;,
            &quot;youtube&quot;: &quot;https://www.youtube.com/channel/UCf7BLip3jg_Vod8RRJa7T6Q&quot;,
            &quot;logo&quot;: &quot;https://upload.wikimedia.org/wikipedia/fr/thumb/9/9d/Logo_Oyonnax_rugby_2018.svg/1200px-Logo_Oyonnax_rugby_2018.svg.png&quot;,
            &quot;pivot&quot;: {
                &quot;league_id&quot;: 1,
                &quot;team_id&quot;: 28
            }
        }
    ],
    &quot;pictures&quot;: []
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-leagues--league_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-leagues--league_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-leagues--league_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-leagues--league_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-leagues--league_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-leagues--league_id-" data-method="GET"
      data-path="api/leagues/{league_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-leagues--league_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-leagues--league_id-"
                    onclick="tryItOut('GETapi-leagues--league_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-leagues--league_id-"
                    onclick="cancelTryOut('GETapi-leagues--league_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-leagues--league_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/leagues/{league_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-leagues--league_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-leagues--league_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>league_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="league_id"                data-endpoint="GETapi-leagues--league_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the league. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-leagues--id-">Update the specified resource in storage.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-leagues--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "/api/leagues/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"vdqfdup\",
    \"creation\": \"a\",
    \"last_champion\": 19,
    \"most_successfull\": 4,
    \"logo\": \"explicabo\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "/api/leagues/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "vdqfdup",
    "creation": "a",
    "last_champion": 19,
    "most_successfull": 4,
    "logo": "explicabo"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    '/api/leagues/1',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'vdqfdup',
            'creation' =&gt; 'a',
            'last_champion' =&gt; 19,
            'most_successfull' =&gt; 4,
            'logo' =&gt; 'explicabo',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-leagues--id-">
</span>
<span id="execution-results-PUTapi-leagues--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-leagues--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-leagues--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-leagues--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-leagues--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-leagues--id-" data-method="PUT"
      data-path="api/leagues/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-leagues--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-leagues--id-"
                    onclick="tryItOut('PUTapi-leagues--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-leagues--id-"
                    onclick="cancelTryOut('PUTapi-leagues--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-leagues--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/leagues/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/leagues/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="PUTapi-leagues--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-leagues--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-leagues--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-leagues--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the league. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-leagues--id-"
               value="vdqfdup"
               data-component="body">
    <br>
<p>Must not be greater than 75 characters. Example: <code>vdqfdup</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>creation</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="creation"                data-endpoint="PUTapi-leagues--id-"
               value="a"
               data-component="body">
    <br>
<p>Must not be greater than 4 characters. Example: <code>a</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>last_champion</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="last_champion"                data-endpoint="PUTapi-leagues--id-"
               value="19"
               data-component="body">
    <br>
<p>Example: <code>19</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>most_successfull</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="most_successfull"                data-endpoint="PUTapi-leagues--id-"
               value="4"
               data-component="body">
    <br>
<p>Example: <code>4</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>logo</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="logo"                data-endpoint="PUTapi-leagues--id-"
               value="explicabo"
               data-component="body">
    <br>
<p>Example: <code>explicabo</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-leagues--id-">Remove the specified resource from storage.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-leagues--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "/api/leagues/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "/api/leagues/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    '/api/leagues/1',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-leagues--id-">
</span>
<span id="execution-results-DELETEapi-leagues--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-leagues--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-leagues--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-leagues--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-leagues--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-leagues--id-" data-method="DELETE"
      data-path="api/leagues/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-leagues--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-leagues--id-"
                    onclick="tryItOut('DELETEapi-leagues--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-leagues--id-"
                    onclick="cancelTryOut('DELETEapi-leagues--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-leagues--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/leagues/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="DELETEapi-leagues--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-leagues--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-leagues--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-leagues--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the league. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-pictures">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-pictures">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "/api/pictures" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "/api/pictures"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    '/api/pictures',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-pictures">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 54
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-pictures" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-pictures"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-pictures"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-pictures" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-pictures">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-pictures" data-method="GET"
      data-path="api/pictures"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-pictures', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-pictures"
                    onclick="tryItOut('GETapi-pictures');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-pictures"
                    onclick="cancelTryOut('GETapi-pictures');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-pictures"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/pictures</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-pictures"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-pictures"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-pictures">Store a newly created resource in storage.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-pictures">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "/api/pictures" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"location\": \"zldsbberahvrsqmolfbl\",
    \"team_id\": 9,
    \"league_id\": 5
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "/api/pictures"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "location": "zldsbberahvrsqmolfbl",
    "team_id": 9,
    "league_id": 5
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    '/api/pictures',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'location' =&gt; 'zldsbberahvrsqmolfbl',
            'team_id' =&gt; 9,
            'league_id' =&gt; 5,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-pictures">
</span>
<span id="execution-results-POSTapi-pictures" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-pictures"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-pictures"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-pictures" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-pictures">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-pictures" data-method="POST"
      data-path="api/pictures"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-pictures', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-pictures"
                    onclick="tryItOut('POSTapi-pictures');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-pictures"
                    onclick="cancelTryOut('POSTapi-pictures');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-pictures"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/pictures</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-pictures"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-pictures"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-pictures"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>location</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="location"                data-endpoint="POSTapi-pictures"
               value="zldsbberahvrsqmolfbl"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>zldsbberahvrsqmolfbl</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>team_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="team_id"                data-endpoint="POSTapi-pictures"
               value="9"
               data-component="body">
    <br>
<p>Example: <code>9</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>league_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="league_id"                data-endpoint="POSTapi-pictures"
               value="5"
               data-component="body">
    <br>
<p>Example: <code>5</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-pictures--picture-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-pictures--picture-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "/api/pictures/ut" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "/api/pictures/ut"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    '/api/pictures/ut',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-pictures--picture-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 53
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-pictures--picture-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-pictures--picture-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-pictures--picture-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-pictures--picture-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-pictures--picture-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-pictures--picture-" data-method="GET"
      data-path="api/pictures/{picture}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-pictures--picture-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-pictures--picture-"
                    onclick="tryItOut('GETapi-pictures--picture-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-pictures--picture-"
                    onclick="cancelTryOut('GETapi-pictures--picture-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-pictures--picture-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/pictures/{picture}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-pictures--picture-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-pictures--picture-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>picture</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="picture"                data-endpoint="GETapi-pictures--picture-"
               value="ut"
               data-component="url">
    <br>
<p>The picture. Example: <code>ut</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-pictures--id-">Update the specified resource in storage.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-pictures--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "/api/pictures/19" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"location\": \"jzzsn\",
    \"team_id\": 2,
    \"league_id\": 19
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "/api/pictures/19"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "location": "jzzsn",
    "team_id": 2,
    "league_id": 19
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    '/api/pictures/19',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'location' =&gt; 'jzzsn',
            'team_id' =&gt; 2,
            'league_id' =&gt; 19,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-pictures--id-">
</span>
<span id="execution-results-PUTapi-pictures--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-pictures--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-pictures--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-pictures--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-pictures--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-pictures--id-" data-method="PUT"
      data-path="api/pictures/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-pictures--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-pictures--id-"
                    onclick="tryItOut('PUTapi-pictures--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-pictures--id-"
                    onclick="cancelTryOut('PUTapi-pictures--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-pictures--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/pictures/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/pictures/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="PUTapi-pictures--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-pictures--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-pictures--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-pictures--id-"
               value="19"
               data-component="url">
    <br>
<p>The ID of the picture. Example: <code>19</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>location</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="location"                data-endpoint="PUTapi-pictures--id-"
               value="jzzsn"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>jzzsn</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>team_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="team_id"                data-endpoint="PUTapi-pictures--id-"
               value="2"
               data-component="body">
    <br>
<p>Example: <code>2</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>league_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="league_id"                data-endpoint="PUTapi-pictures--id-"
               value="19"
               data-component="body">
    <br>
<p>Example: <code>19</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-pictures--id-">Remove the specified resource from storage.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-pictures--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "/api/pictures/8" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "/api/pictures/8"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    '/api/pictures/8',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-pictures--id-">
</span>
<span id="execution-results-DELETEapi-pictures--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-pictures--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-pictures--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-pictures--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-pictures--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-pictures--id-" data-method="DELETE"
      data-path="api/pictures/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-pictures--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-pictures--id-"
                    onclick="tryItOut('DELETEapi-pictures--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-pictures--id-"
                    onclick="cancelTryOut('DELETEapi-pictures--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-pictures--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/pictures/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="DELETEapi-pictures--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-pictures--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-pictures--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-pictures--id-"
               value="8"
               data-component="url">
    <br>
<p>The ID of the picture. Example: <code>8</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-register">Fonction qui permet de créer un nouveau user et de génerer un Token</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "/api/register" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"molestiae\",
    \"email\": \"richmond16@example.org\",
    \"password\": \"sit\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "/api/register"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "molestiae",
    "email": "richmond16@example.org",
    "password": "sit"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    '/api/register',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'molestiae',
            'email' =&gt; 'richmond16@example.org',
            'password' =&gt; 'sit',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-register">
</span>
<span id="execution-results-POSTapi-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-register"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-register">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-register" data-method="POST"
      data-path="api/register"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-register"
                    onclick="tryItOut('POSTapi-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-register"
                    onclick="cancelTryOut('POSTapi-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-register"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-register"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-register"
               value="molestiae"
               data-component="body">
    <br>
<p>Example: <code>molestiae</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-register"
               value="richmond16@example.org"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>richmond16@example.org</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-register"
               value="sit"
               data-component="body">
    <br>
<p>Example: <code>sit</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-login">POST api/login</h2>

<p>
</p>



<span id="example-requests-POSTapi-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "/api/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "/api/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    '/api/login',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-login">
</span>
<span id="execution-results-POSTapi-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-login" data-method="POST"
      data-path="api/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-login"
                    onclick="tryItOut('POSTapi-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-login"
                    onclick="cancelTryOut('POSTapi-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-login"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                                                        <button type="button" class="lang-button" data-language-name="php">php</button>
                            </div>
            </div>
</div>
</body>
</html>
