@servers(['main' => ['sanad9637@sanadorphans.org']])

@setup
    $repository = 'git@github.com:EslamMuhammedSaeed/wataneya.git';
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
    echo 'Linking .env file'
    ln -nfs ~/.env ~/{{ $new_release_dir }}
    cd {{ $new_release_dir }}
    echo "Starting composer"
    composer install
    echo "finishing composer"
@endtask

@task('update_symlinks')
    echo "Linking storage directory"
    rm -rf {{ $new_release_dir }}/storage
    ln -nfs ~/storage {{ $new_release_dir }}/storage


    echo 'Linking current release'
    ln -nfs {{ $new_release_dir }} ~/current
    echo 'going to current'
    cd ~/current

    ln -nfs ~/{{ $new_release_dir }}/public/assets ~/public_html/assets
    ln -nfs ~/{{ $new_release_dir }}/public/img ~/public_html/img
    ln -nfs ~/{{ $new_release_dir }}/public/css ~/public_html/css
    php artisan storage:link
    php artisan migrate
@endtask