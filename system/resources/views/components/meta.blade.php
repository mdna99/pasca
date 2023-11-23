@if(isset($post))
@php
$title = $post->title;
$description = Str::limit(strip_tags($post->description), 200);
$image = !empty($post->cover) ? asset($post->cover) : asset('assets/img/nocover.png');
$url = generateUrl($post->slug);
@endphp
@elseif(isset($menu))
@php
$title = $menu->title;
$description = Str::limit(strip_tags($menu->description), 200);
$image = !empty($menu->cover) ? asset($menu->cover) : asset('assets/img/nocover.png');
$url = generateUrl($menu->slug);
@endphp
@else
@php
$title = data_get($setting, 'name', '-');
$description = strip_tags(data_get($setting, 'tagline', '-'));
$image = asset(data_get($setting, 'icon', '-'));
$url = generateUrl('');
@endphp
@endif

        <meta name="description" content="{{ strip_tags(data_get($setting, 'tagline', '-')) }}"/>
        <meta name="author" content="{{ data_get($setting, 'name', '-') }}" />
        <meta name="copyright" content="{{ data_get($setting, 'name', '-') }}" />
        <meta name="application-name" content="{{ data_get($setting, 'name', '-') }}" />

        <meta property="og:title" content="{{ $title }}" />
        <meta property="og:type" content="article" />
        <meta property="og:image" content="{{ $image }}" />
        <meta property="og:image:alt" content="{{ $title }}" />
        <meta property="og:image:width" content="500" />
        <meta property="og:image:height" content="500" />
        <meta property="og:url" content="{{ $url }}" />
        <meta property="og:description" content="{{ $description }}" />

        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="{{ $title }}" />
        <meta name="twitter:description" content="{{ $description }}" />
        <meta name="twitter:image" content="{{ $image }}" />

        <script type="application/ld+json">
                {
                    "@context": "http://schema.org",
                    "@type": "NewsArticle",
                    "headline": "Prakiraan Cuaca DIY Rabu 26 Pktober 2023, Pagi Sampai Siang Cerah Berawan",
                    "datePublished": "2023-10-26 01:17:28",
                    "dateModified": "2023-10-26 01:17:28",
                    "mainEntityOfPage": {
                        "@type": "WebPage",
                        "@id": "https://www.uinsaid.ac.id/2023/10/26/510/1152902/prakiraan-cuaca-diy-rabu-26-pktober-2023-pagi-sampai-siang-cerah-berawan"
                    },
                    "description": “Prakiraan Cuaca ini dikutip dari laman bmkg.go.id:",
                    "image": {
                        "@type": "ImageObject",
                        "url": "https://www..uinsaid.ac.id/2023/10/26/1152902/cuaca-cerah-ok.jpg"
                    },
                    "author": {
                        "@type": “User”,
                        "name": “Publisher”
                    },
                    "editor": {
                        "@type": "User",
                        "name": "Publisher"
                    },
                    "publisher": {
                        "@type": "Organization",
                        "name": “UINSAID”,
                        "url": "https://www.uinsaid.ac.id/“,
                        "sameAs": [
                            "https://www.facebook.com/uinsaid",
                            "https://twitter.com/uinsaid",
                            "https://www.instagram.com/uinsaid"
                        ],
                        "logo": {
                            "@type": "ImageObject",
                            "url": "https://www.uinsaid.ac.id/assets/v3/img/uinsaidlogo.png",
                            "width": 350,
                            "height": 58
                        }
                    }
                }
            </script>