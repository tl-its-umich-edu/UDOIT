<?

$test_content['items'] = [
    [
        'id'        => "headershavetext",
        'content'   => '<h1></h1>',
        'title'     => "headersHaveText",
        'url'       => "https://"
    ],
    [
        'id'        => "amustcontaintext",
        'content'   => '<p><a href="https://www.google.com/&amp;c=1" target="_blank"></a></p>',
        'title'     => "aMustContainText",
        'url'       => "https://"
    ],
    [
        'id'        => "asuspiciouslinktext",
        'content'   => '<p><a href="http://example.com/document.pdf">Click Here</a></p>',
        'title'     => "aSuspiciousLinkText",
        'url'       => "https://"
    ],
    [
        'id'        => "alinktextdoesnotbeginwithredundantword",
        'content'   => '<p><a href="https://www.google.com/">link to site</a></p>',
        'title'     => "aLinkTextDoesNotBeginWithRedundantWord",
        'url'       => "https://"
    ],
    [
        'id'        => "csstexthascontrast",
        'content'   => '<p style="color: #ffff00;">Colored “Text”</p>',
        'title'     => "cssTextHasContrast",
        'url'       => "https://"
    ],
    [
        'id'        => "csstextstyleemphasize",
        'content'   => '<p style="color: #00000f;">Colored “Text”</p>',
        'title'     => "cssTextStyleEmphasize",
        'url'       => "https://"
    ],
    [
        'id'        => "imghasalt",
        'content'   => '<img src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png" alt="">',
        'title'     => "imgHasAlt",
        'url'       => "https://"
    ],
    [
        'id'        => "imgaltisdifferent",
        'content'   => '<img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" alt="googlelogo_color_272x92dp.png"></p>',
        'title'     => "imgAltIsDifferent",
        'url'       => "https://"
    ],
    [
        'id'        => "tabledatashouldhaveth",
        'content'   => '<table border="1">
                            <tbody>
                                <tr>
                                    <td>Header 1</td>
                                    <td>Header 2</td>
                                </tr>
                                <tr>
                                    <td>Placeholder 1</td>
                                    <td>Placeholder 2</td>
                                </tr>
                            </tbody>
                        </table>',
        'title'     => "tableDataShouldHaveTh",
        'url'       => "https://"
    ],
    [
        'id'        => "tablethshouldhavescope",
        'content'   => '<table border="1">
                            <tbody>
                                <tr>
                                    <th>Header 1</th>
                                    <th scope="col">Header 2</th>
                                </tr>
                                <tr>
                                    <td>Placeholder 1</td>
                                    <td>Placeholder 2</td>
                                </tr>
                            </tbody>
                        </table>',
        'title'     => "tableThShouldHaveScope",
        'url'       => "https://"
    ],
    [
        'id'        => "pnotusedasheader",
        'content'   => '<p><strong>Bolded Paragraph Text</strong></p>',
        'title'     => "pNotUsedAsHeader",
        'url'       => "https://"
    ],
    [
        'id'        => "videosembeddedorlinkedneedcaptions",
        'content'   => '<p><a href="https://www.youtube.com/watch?v=5IJWckL5L84">Video Without Captions</a></p>',
        'title'     => "videosEmbeddedOrLinkedNeedCaptions",
        'url'       => "https://"
    ],
    [
        'id'        => "noIssues",
        'content'   => '<p><a id="" class="" title="" href="https://www.youtube.com/watch?v=oJ9VbNtPhIk" target="">Video With Captions</a></p>',
        'title'     => "noIssues",
        'url'       => "https://"
    ]
];

$test_content['amount']        = 0;
$test_content['time']          = (float)0;
$test_content['module_urls']   = [];
$test_content['unscannable']   = [];