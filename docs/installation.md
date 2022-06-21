# Installation

You can easily run via docker-compose.

## Security

It's use nginx as web server so you can modify `nginx/templates/default.prod.conf.template` for initialize values.

### Behind proxy server

Mount `nginx/common-server.conf` and modify the trusted proxy ips for security.

## Configurations

| Name                                       | Type    | Description                                                                                              | Default                            |
| ------------------------------------------ | ------- | -------------------------------------------------------------------------------------------------------- | ---------------------------------- |
| `ASM_PM_ID`                                | number  | PM2 process identifier                                                                                   | `0`                                |
| `ASM_PUBLIC_APP_INSTANCE`                  | number  | Application cluster number                                                                               | `2`                                |
| `ASM_PUBLIC_SENDING_INTERVAL_MICROSECONDS` | number  | Sending interval in microseconds for try next message.                                                   | `1000`                             |
| `ASM_PUBLIC_APP_TITLE`                     | string  | Application title                                                                                        | `SMS Gateway`                      |
| `ASM_ADMIN_USERNAME`                       | string  | Administrator user name                                                                                  | `root`                             |
| `ASM_DEFAULT_USERNAME`                     | string  | Default user name                                                                                        | `default`                          |
| `ASM_PUBLIC_APP_TEST`                      | boolean | Application is in testing mode                                                                           | `false`                            |
| `ASM_PUBLIC_LOCAL_FAILED_CHANCE`           | number  | How is chance between 1 to n to fails will be simulate. If 10, so 1/10 equal 10 percent chance of failed | `2`                                |
| `ASM_PUBLIC_MAX_TRY`                       | number  | Max try for sending message after that message will not send                                             | `10`                               |
| `ASM_PUBLIC_ADAPTERS` <sup>[2]</sup>       | string  | List of possible adapters                                                                                | `local`                            |
| `ASM_PUBLIC_BASE_URL`                      | string  | Base URL of application. Example: `/` or `/base-path/`                                                   | `/`                                |
| `ASM_PUBLIC_AUTH_COOKIE`                   | string  | Authentication cookie name                                                                               | `AuthToken`                        |
| `ASM_PUBLIC_AUTH_COOKIE_LIFETIME`          | number  | Lifetime of authentication token/cookie                                                                  | `14400`                            |
| `ASM_AUTH_HMAC_ALG`                        | string  | Application authentication HMAC algorithm                                                                | `HS256`                            |
| `ASM_AUTH_HMAC_SECRET` <sup>[1]</sup>      | string  | Application authentication HMAC secret                                                                   | `00000000000000000000000000000000` |
| `ASM_PUBLIC_AUTH_USER_API_KEY`             | string  | Header that carry the stored user token.                                                                 | `x-user-api-key`                   |
| `ASM_APP_PORT`                             | number  | Application HTTP port                                                                                    | `3001`                             |
| `ASM_MARIADB_DATABASE`                     | string  | MariaDB database                                                                                         | `mariadb-db`                       |
| `ASM_MARIADB_USER`                         | string  | MariaDB username                                                                                         | `mariadb-user`                     |
| `ASM_MARIADB_PASSWORD`                     | string  | MariaDB password                                                                                         | `mariadb-password`                 |
| `ASM_MARIADB_HOST`                         | string  | MariaDB host                                                                                             | `sms-gateway-mariadb`              |
| `ASM_MELIPAYAMAK_NUMBER`                   | string  | MeliPayamak send number                                                                                  | `undefined`                        |
| `ASM_MELIPAYAMAK_USERNAME`                 | string  | MeliPayamak username                                                                                     | `undefined`                        |
| `ASM_MELIPAYAMAK_PASSWORD`                 | string  | MeliPayamak password                                                                                     | `undefined`                        |
| `ASM_MELIPAYAMAK_PRIORITY`                 | string  | MeliPayamak priority over other adapters                                                                 | `undefined`                        |
| `ASM_MELIPAYAMAK_COUNTRIES` <sup>[2]</sup> | string  | MeliPayamak allowed countries                                                                            | `IR`                               |

### Notes

1. Required to be set during deployment
2. Comma separated field like `foo,bar`
