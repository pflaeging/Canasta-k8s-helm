# Mediawiki canasta on kubernetes (via helm?)

This is an afford to make a good and real gitOps kubernetes deployment of canasta mediawiki.

The goal is to get a running helm version, but at first we try to deploy with kustomize and port it later to helm.

## Status

We're in the middle of porting the system from the non funtional <https://github.com/CanastaWiki/Canasta-Kubernetes> to a running gitOps deployment with kustomize or helm.

Started with the above repo and a rollout of canasta with doccker-compose:

At the moment the deployment will run with:


## Install for now

- Install the excellent MariaDB operator:

    ```shell
    helm repo add mariadb-operator https://mariadb-operator.github.io/mariadb-operator
    helm install mariadb-operator-crds mariadb-operator/mariadb-operator-crds  -n mariadb-operator --create-namespace
    helm install mariadb-operator  mariadb-operator/mariadb-operator -n mariadb-operator --create-namespace
    ```

- Edit the configs in:

  - `kustomize/components/dev/config/*`
  - `kustomize/components/dev/settings/*`
  - `kustomize/components/dev/environment`
  - `kustomize/components/dev/ingress.yaml`

- When you add files in ..../config/ or ..../settings/ run the script `kustomize/dev/mkconfig.sh`. This makes the correct configs for kustomize!

- After this you can make a simple: `kubectl apply -k kustomize/dev` to install and run!

- You can implement staging with the directories `test`, `qm` and `prod`!

At the moment all containers are starting and you can access it via the ingress. The DB connection reports an error, this should be fixed by someone who knows canasta better. 

## ToDo

- [ ] make it run: fix db error
- [ ] check for individual config parameters
- [ ] make deployment more universal
- [ ] create helm chart from this config
- [ ] documentation for deploy and config (started in [./doc/](./doc/))
- [ ] reenable http caching?
- [ ] invest in horizontal scaling