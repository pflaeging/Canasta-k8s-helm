# Which onjects are created in kubernetes?

## Database (MariaDB operator)

Created if you make an instance with kustomize:

| name                                | type                     |
| ----------------------------------- | ------------------------ |
| db-instance                         | mariadbs.k8s.mariadb.com |
| db-secret                           | Secrets                  |
| db-instance-ca                      |                          |
| db-instance-ca-bundle               |                          |
| db-instance-client-cert             |                          |
| db-instance-server-cert             |                          |
| db-instance-config                  | ConfigMaps               |
| db-instance-config-default          |                          |
| db-instance-config-tls              |                          |
| grant                               | grants.k8s.mariadb.com   |
| db-instance-mariadb-sys-global-priv |                          |
| db-instance-user-all                |                          |
| db-user                             | users.k8s.mariadb.com    |
| db-instance-mariadb-sys             |                          |
| db-instance-user                    |                          |
| storag-db-instance                  | PersistantVolumeClaims   |

## MediaWiki (Canasta Container)

| name               | type                   |
| ------------------ | ---------------------- |
| web                | Deployments            |
| canasta-config     | Configmaps             |
| canasta-env        |                        |
| web-dev-tls-secret | Secrets                |
| config-data        | PersistantVolumeClaims |
| sitemap-data       |                        |