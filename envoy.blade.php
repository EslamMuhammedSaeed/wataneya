@servers(['main' => ['sanad9637@sanadorphans.org']])

@setup
    $repository = 'git@gitlab.com:eslam.muhammed.saeed/cayesh_main.git';
    $releases_dir = 'releases';
    $release = date('YmdHis');
    $new_release_dir = $releases_dir .'/'. $release;

@endsetup

@story('deploy',['on' => 'main'])
    clone_repository
    run_composer
    update_symlinks
@endstory

@task('clone_repository')
    echo 'Cloning repository'
    [ -d {{ $releases_dir }} ] || mkdir {{ $releases_dir }}
    git clone --depth 1 {{ $repository }} {{ $new_release_dir }}
    cd {{ $new_release_dir }}
    git reset --hard {{ $commit }}
@endtask

@task('run_composer')
    echo "Starting deployment ({{ $release }})"
    cd {{ $new_release_dir }}
    composer install --ignore-platform-reqs --prefer-dist -q -o
@endtask

@task('update_symlinks')
    {{-- echo "Linking storage directory"
    rm -rf {{ $new_release_dir }}/storage
    ln -nfs {{ $app_dir }}/storage {{ $new_release_dir }}/storage

    echo 'Linking .env file'
    ln -nfs {{ $app_dir }}/.env {{ $new_release_dir }}/.env

    echo 'Linking current release'
    ln -nfs {{ $new_release_dir }} {{ $app_dir }}/current

    cd {{ $app_dir }}/current
    php artisan storage:link
    php artisan migrate --}}


@endtask