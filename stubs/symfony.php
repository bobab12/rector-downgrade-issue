<?php

namespace Amp\ByteStream {
    if (!interface_exists('InputStream')) {
        interface InputStream {}
    }
}
namespace Amp\Dns {
    if (!interface_exists('Resolver')) {
        interface Resolver {}
    }
}

namespace Amp\Http\Client {
    if (!interface_exists('EventListener')) {
        interface EventListener {}
    }
    if (!interface_exists('RequestBody')) {
        interface RequestBody {}
    }
}

namespace Amp\Socket {
    if (!interface_exists('Connector')) {
        interface Connector {}
    }
}

namespace Http\Client {
    if (!interface_exists('HttpAsyncClient')) {
        interface HttpAsyncClient {}
    }
    if (!interface_exists('HttpClient')) {
        interface HttpClient {}
    }
}

namespace Http\Message {
    if (!interface_exists('RequestFactory')) {
        interface RequestFactory {}
    }
    if (!interface_exists('StreamFactory')) {
        interface StreamFactory {}
    }
    if (!interface_exists('UriFactory')) {
        interface UriFactory {}
    }
}

namespace Http\Promise {
    if (!interface_exists('Promise')) {
        interface Promise {}
    }
}

namespace Psr\Http\Client {
    if (!interface_exists('ClientInterface')) {
        interface ClientInterface {}
    }
    if (!interface_exists('NetworkExceptionInterface')) {
        interface NetworkExceptionInterface {}
    }
    if (!interface_exists('RequestExceptionInterface')) {
        interface RequestExceptionInterface {}
    }
}

namespace Psr\Http\Message {
    if (!interface_exists('RequestFactoryInterface')) {
        interface RequestFactoryInterface {}
    }
    if (!interface_exists('RequestInterface')) {
        interface RequestInterface {}
    }
    if (!interface_exists('ResponseFactoryInterface')) {
        interface ResponseFactoryInterface {}
    }
    if (!interface_exists('ResponseInterface')) {
        interface ResponseInterface {}
    }
    if (!interface_exists('StreamFactoryInterface')) {
        interface StreamFactoryInterface {}
    }
    if (!interface_exists('StreamInterface')) {
        interface StreamInterface {}
    }
    if (!interface_exists('UriFactoryInterface')) {
        interface UriFactoryInterface {}
    }
    if (!interface_exists('UriInterface')) {
        interface UriInterface {}
    }
}

namespace Symfony\Component\DependencyInjection\Compiler {
    if (!interface_exists('CompilerPassInterface')) {
        interface CompilerPassInterface {}
    }
}

namespace Symfony\Component\HttpClient {
    if (!class_exists('AmpHttpClient')) {
        class AmpHttpClient {}
    }
    if (!class_exists('HttplugClient')) {
        class HttplugClient {}
    }
    if (!class_exists('Psr18Client')) {
        class Psr18Client {}
    }
}

namespace Symfony\Component\HttpKernel\DataCollector {
    if (!interface_exists('LateDataCollectorInterface')) {
        interface LateDataCollectorInterface {}
    }
    if (!class_exists('DataCollector')) {
        class DataCollector {}
    }
}
