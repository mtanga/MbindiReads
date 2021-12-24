<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission'     => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Title',
            'title_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Title',
            'title_helper'       => '',
            'permissions'        => 'Permissions',
            'permissions_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'           => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Name',
            'name_helper'              => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => '',
            'password'                 => 'Password',
            'password_helper'          => '',
            'roles'                    => 'Roles',
            'roles_helper'             => '',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => '',
            'created_at'               => 'Created at',
            'created_at_helper'        => '',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => '',
        ],
    ],
    'project'        => [
        'title'          => 'Projects',
        'title_singular' => 'Project',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'users'             => 'Users',
            'users_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'folder'         => [
        'title'          => 'Folders',
        'title_singular' => 'Folder',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'description_helper'       => '',
            'project'           => 'Project',
            'project_helper'    => '',
            'files'             => 'Files',
            'files_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
            'folder'            => 'Folder',
            'folder_helper'     => '',
        ],
    ],
    'menu'         => [
        'users'          => 'Users',
        'level' => 'Level',
        'ressources' => 'Ressourses',
        'ressource' => 'Ressourse',
        'quiz' => 'Quiz',
        'answers' => 'Answers',
        'memberships' => 'Memberships',
        'membership' => 'Membership',
        'awards' => 'Awards',
        'subjects' => 'Subjects',
        'genres' => 'Genres',
        'themes' => 'Themes',
        'agegroup' => 'Age group',
        'payements'         => 'Payements',
        'awards'         => 'Awards',
    ],
    'global'         => [
        'management'        => 'Management',
        'rmanagement'        => 'Ressources management',
        'myaccount'         => 'Mon compte',
        'dashboard'         => 'Dashboard',
        'settings'         => 'Settings',
        'newSubject'         => 'new subject',
        'addSubject'         => 'new subject',
        'addGenre'         => 'new genre',
        'addTheme'         => 'new theme',
        'subject'         => 'Subject',
        'genre'         => 'Genre',
        'theme'         => 'Theme',
        'order'         => 'Order',
        'level'         => 'Level',
        'addLevel'         => 'new level',
        'addAgegroup'         => 'age group',
        'years_start'         => 'Years start',
        'years_end'         => 'Years end',
        'payements'         => 'Payements',
        'payement'         => 'payement',
        'price'         => 'Price',
        'users'         => 'Users',
        'membership'         => 'Membership',
        'status'         => 'Status',
        'ressource' => 'Ressourse',
        'viewPdf' => 'View pdf',
        'age' => 'Age group',
        'award'         => 'Award',
        'note'         => 'note',
        'description'         => 'description',
        'viewImage' => 'View image',
        'type' => 'Type', 
        'periode' => 'Periode',
        'paswordchange' => 'Pasword change',
    ],
    'forms'         => [
        'id'                => 'ID',
        'id_helper'         => '',
        'name'              => 'Name',
        'descritpion'       => 'Description',
        'previewImage'      => 'Image de couverture',
        'name_helper'       => '',
        'project'           => 'Project',
        'project_helper'    => '',
        'files'             => 'Files',
        'files_helper'      => '',
        'created_at'        => 'Created at',
        'created_at_helper' => '',
        'updated_at'        => 'Updated at',
        'updated_at_helper' => '',
        'deleted_at'        => 'Deleted at',
        'deleted_at_helper' => '',
        'folder'            => 'Folder',
        'folder_helper'     => '',
    ],
];