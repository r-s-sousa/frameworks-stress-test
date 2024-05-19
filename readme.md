# php and node stress test

## requirements

- NodeJS >= 20
- PHP >= 8.1
  - swoole extension
  
    ```bash
    pecl install swoole
    ```

  - openswoole extension

    ```bash
    pecl install openswoole
    ```

## php.ini

Add the following to your php.ini file depending on the way you run your server.

### optional extension

- extension=redis
- zend_extension=opcache

### laravel octane

*choose one:*

- extension=swoole
- extension=openswoole

### HyperF

- extension=swoole

### openswoole

- extension=openswoole

---

## command to start server

Needs enter and install all dependencies in root directory of each project before run start command.

### nodejs start

```bash
node index.js
```

More information: [https://nodejs.org/en](https://nodejs.org/en)

### hyperf start

```bash
php bin/hyperf.php start
```

More information: [https://github.com/hyperf/hyperf](https://github.com/hyperf/hyperf)

### laravel-octane start

```bash
php artisan octane:start
```

More information: [https://github.com/hyperf/hyperf](https://github.com/hyperf/hyperf)

### openswoole start

```bash
php index.php
```

More information: [https://openswoole.com/](https://openswoole.com/)

### php-react start

```bash
php index.php
```

More information: [https://reactphp.org/](https://reactphp.org/)

### slim start

```bash
php -S localhost:8000
```

### My personal router test

```bash
php -S localhost:8000 -t public
```

More information: [https://www.slimframework.com/](https://www.slimframework.com/)

## stress test with pest

Needs enter in z-request directory to exec stress test.
*Documentation:* [pest stress test](https://pestphp.com/docs/stress-testing)

### nodejs test

```bash
./vendor/bin/pest stress http://localhost:3000 --concurrency=10 --duration=15
```

### hyperf test

```bash
./vendor/bin/pest stress http://localhost:9501 --concurrency=10 --duration=15
```

### laravel-octane test

```bash
./vendor/bin/pest stress http://localhost:8000/api --concurrency=10 --duration=15
```

### openswoole test

```bash
./vendor/bin/pest stress http://localhost:9501 --concurrency=10 --duration=15
```

### php-react test

```bash
./vendor/bin/pest stress http://localhost:8080 --concurrency=10 --duration=15
```

### slim test

```bash
./vendor/bin/pest stress http://localhost:8000 --concurrency=10 --duration=15
```

### My personal router test

```bash
./vendor/bin/pest stress http://localhost:8000 --concurrency=10 --duration=15
```

## Stress Test Results

This README presents the stress test results for various frameworks and technologies. Each section below outlines the performance metrics obtained during the stress testing.

### Node.js Results

**Test Duration**: 15.00 s  
**Test Concurrency**: 10  
**Requests Count**: 12145.35 reqs/s (182190 requests)  
**Success Rate**: 100.0%  
**DNS Lookup Duration**: 127.0.0.1, ::1 (0.00 ms)  
**TLS Handshake Duration**: 0.00 ms  
**Request Duration**: 0.59 ms  
- **Upload**: 2.5% (0.00 MB/req, 1.38 MB/s, 0.01 ms)  
- **Time To First Byte (TTFB)**: 88.4% (including server processing time, 0.52 ms)  
- **Download**: 7.1% (0.00 MB/req, 2.21 MB/s, 0.04 ms)

### Hyperf Results

**Test Duration**: 15.00 s  
**Test Concurrency**: 10  
**Requests Count**: 10874.15 reqs/s (163133 requests)  
**Success Rate**: 100.0%  
**DNS Lookup Duration**: 127.0.0.1, ::1 (0.00 ms)  
**TLS Handshake Duration**: 0.00 ms  
**Request Duration**: 0.56 ms  
-**Upload**: 2.8% (0.00 MB/req, 1.23 MB/s, 0.02 ms)  
-**TTFB**: 85.4% (including server processing time, 0.48 ms)  
-**Download**: 7.9% (0.00 MB/req, 1.97 MB/s, 0.04 ms)

### Laravel Octane Results

**Test Duration**: 15.21 s  
**Test Concurrency**: 10  
**Requests Count**: 681.8 reqs/s (10367 requests)  
**Success Rate**: 100.0%  
**DNS Lookup Duration**: 127.0.0.1, ::1 (0.00 ms)  
**TLS Handshake Duration**: 0.00 ms  
**Request Duration**: 4.50 ms  
-**Upload**: 0.5% (0.00 MB/req, 0.08 MB/s, 0.02 ms)  
-**TTFB**: 97.7% (including server processing time, 4.39 ms)  
-**Download**: 1.6% (0.00 MB/req, 0.14 MB/s, 0.07 ms)

### OpenSwoole Results

**Test Duration**: 15.00 s  
**Test Concurrency**: 10  
**Requests Count**: 16618.73 reqs/s (249331 requests)  
**Success Rate**: 100.0%  
**DNS Lookup Duration**: 127.0.0.1, ::1 (0.00 ms)  
**TLS Handshake Duration**: 0.00 ms  
**Request Duration**: 0.30 ms  
-**Upload**: 5.0% (0.00 MB/req, 1.89 MB/s, 0.01 ms)  
-**TTFB**: 78.5% (including server processing time, 0.23 ms)  
-**Download**: 9.7% (0.00 MB/req, 2.08 MB/s, 0.03 ms)

### PHP React Results

**Test Duration**: 15.00 s  
**Test Concurrency**: 10  
**Requests Count**: 9377.25 reqs/s (140670 requests)  
**Success Rate**: 100.0%  
**DNS Lookup Duration**: 127.0.0.1, ::1 (0.00 ms)  
**TLS Handshake Duration**: 0.00 ms  
**Request Duration**: 0.91 ms  
-**Upload**: 1.7% (0.00 MB/req, 1.06 MB/s, 0.02 ms)  
-**TTFB**: 93.8% (including server processing time, 0.86 ms)  
-**Download**: 4.3% (0.00 MB/req, 1.35 MB/s, 0.04 ms)

### Slim Results

**Test Duration**: 15.01 s  
**Test Concurrency**: 10  
**Requests Count**: 946.76 reqs/s (14211 requests)  
**Success Rate**: 100.0%  
**DNS Lookup Duration**: 127.0.0.1, ::1 (0.14 ms)  
**TLS Handshake Duration**: 0.00 ms  
**Request Duration**: 9.94 ms  
-**Upload**: 0.5% (0.00 MB/req, 0.11 MB/s, 0.05 ms)  
-**TTFB**: 98.1% (including server processing time, 9.75 ms)  
-**Download**: 1.3% (0.00 MB/req, 0.16 MB/s, 0.13 ms)

### My personal router results

**Test Duration**: 15.00 s
**Test Concurrency**: 10
**Requests Count**: 2646.63 reqs/s 39709 requests
**Success Rate**: 100.0 %
**DNS Lookup Duration**: 127.0.0.1, ::1 0.14 ms
**TLS Handshake Duration**: 0.00 ms
**Request Duration**: 3.31 ms
-**Upload**: 0.00 MB/req 0.30 MB/s 0.04 ms
-**TTFB**: 94.9 % (including server processing time, 3.14 ms)
-**Download**: 3.6 %: 0.00 MB/req 0.42 MB/s 0.12 ms
