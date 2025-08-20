# Prerequistes

## Kubernetes cluster

Use the distribution you want. Examples here are in [gubernat](https://github.com/pflaeging/gubernat) and OKD/OpenShift (<https://okd.io>).

You should have on your management machine:

- git
- helm
- kubectl

## MariaDB Operator

This installs the mariadb operator (<https://github.com/mariadb-operator/mariadb-operator>) on your cluster.
It's the recommended way to work with mariadb. I would **not** recommend the bitnami helm install, because Bitnami is switching there open source policy!

```shell
helm repo add mariadb-operator https://mariadb-operator.github.io/mariadb-operator
helm install mariadb-operator-crds mariadb-operator/mariadb-operator-crds -n mariadb-operator --create-namespace
helm install mariadb-operator mariadb-operator/mariadb-operator -n mariadb-operator --create-namespace
```

