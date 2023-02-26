<?php

return [

    // Validation Language Lines

    'accepted'             => ':attribute harus diterima.',
    'active_url'           => ':attribute bukan URL yang sah.',
    'after'                => ':attribute harus tanggal setelah :date.',
    'after_or_equal'       => ':attribute harus tanggal setelah atau sama dengan :date.',
    'alpha'                => ':attribute hanya boleh berisi huruf.',
    'alpha_dash'           => ':attribute hanya boleh berisi huruf, angka, dan strip.',
    'alpha_num'            => ':attribute hanya boleh berisi huruf dan angka.',
    'array'                => ':attribute harus berupa sebuah array.',
    'before'               => ':attribute harus tanggal sebelum :date.',
    'before_or_equal'      => ':attribute harus tanggal sebelum atau sama dengan :date.',
    'between'              => [
        'numeric' => ':attribute harus antara :min dan :max.',
        'file'    => ':attribute harus antara :min dan :max kilobytes.',
        'string'  => ':attribute harus antara :min dan :max karakter.',
        'array'   => ':attribute harus antara :min dan :max item.',
    ],
    'boolean'              => ':attribute harus berupa true atau false',
    'confirmed'            => 'Konfirmasi :attribute tidak cocok.',
    'date'                 => ':attribute bukan tanggal yang valid.',
    'date_equals'          => ':attribute harus tanggal yang sama dengan :date.',
    'date_format'          => ':attribute tidak cocok dengan format :format.',
    'different'            => ':attribute dan :other harus berbeda.',
    'digits'               => ':attribute harus berupa angka :digits.',
    'digits_between'       => ':attribute harus antara angka :min dan :max.',
    'dimensions'           => ':attribute harus merupakan dimensi gambar yang sah.',
    'distinct'             => ':attribute memiliki nilai yang duplikat.',
    'email'                => ':attribute harus berupa alamat email yang valid.',
    'ends_with'            => ':attribute harus diakhiri dengan: :values.',
    'exists'               => ':attribute yang dipilih tidak valid.',
    'file'                 => ':attribute harus berupa file.',
    'filled'               => ':attribute harus diisi.',
    'gt' => [
        'numeric'   => ':attribute harus lebih besar dari :value.',
        'file'      => ':attribute harus lebih besar dari :value kilobytes.',
        'string'    => ':attribute harus lebih besar dari :value karakter.',
        'array'     => ':attribute harus memiliki lebih dari :value item.',
    ],
    'gte' => [
        'numeric'   => ':attribute harus lebih besar dari atau sama dengan :value.',
        'file'      => ':attribute harus lebih besar dari atau sama dengan :value kilobytes.',
        'string'    => ':attribute harus lebih besar dari atau sama dengan :value karakter.',
        'array'     => ':attribute harus memiliki :value item atau lebih.',
    ],
    'image'                => ':attribute harus berupa gambar.',
    'in'                   => ':attribute yang dipilih tidak valid.',
    'in_array'             => ':attribute tidak terdapat dalam :other.',
    'integer'              => ':attribute harus merupakan bilangan bulat.',
    'ip'                   => ':attribute harus berupa alamat IP yang valid.',
    'ipv4'                 => ':attribute harus berupa alamat IPv4 yang valid.',
    'ipv6'                 => ':attribute harus berupa alamat IPv6 yang valid.',
    'json'                 => ':attribute harus berupa JSON string yang valid.',
    'lt' => [
        'numeric'   => ':attribute harus kurang dari :value.',
        'file'      => ':attribute harus kurang dari :value kilobytes.',
        'string'    => ':attribute harus kurang dari :value karakter.',
        'array'     => ':attribute harus memiliki kurang dari :value item.',
    ],
    'lte' => [
        'numeric'   => ':attribute harus kurang dari atau sama dengan :value.',
        'file'      => ':attribute harus kurang dari atau sama dengan :value kilobytes.',
        'string'    => ':attribute harus kurang dari atau sama dengan :value karakter.',
        'array'     => ':attribute tidak boleh lebih dari :value item.',
    ],
    'max'                  => [
        'numeric' => ':attribute seharusnya tidak lebih dari :max.',
        'file'    => ':attribute seharusnya tidak lebih dari :max kilobytes.',
        'string'  => ':attribute seharusnya tidak lebih dari :max karakter.',
        'array'   => ':attribute seharusnya tidak lebih dari :max item.',
    ],
    'mimes'                => ':attribute harus dokumen berjenis : :values.',
    'mimetypes'            => ':attribute harus berupa file bertipe: :values.',
    'min'                  => [
        'numeric' => ':attribute harus terdiri dari minimal :min karakter.',
        'file'    => ':attribute harus minimal :min kilobytes.',
        'string'  => ':attribute harus minimal :min karakter.',
        'array'   => ':attribute harus minimal :min item.',
    ],
    'not_in'               => ':attribute yang dipilih tidak valid.',
    'not_regex'            => ':attribute format tidak valid.',
    'numeric'              => ':attribute harus berupa angka.',
    'password'             => 'Kata sandi tidak benar',
    'present'              => ':attribute harus ada.',
    'regex'                => 'format :attribute tidak sesuai.',
    'required'             => ':attribute harus diisi.',
    'required_if'          => ':attribute harus diisi bila :other adalah :value.',
    'required_unless'      => ':attribute harus diisi kecuali :other memiliki nilai :values.',
    'required_with'        => ':attribute harus diisi bila terdapat :values.',
    'required_with_all'    => ':attribute harus diisi bila terdapat :values.',
    'required_without'     => ':attribute harus diisi bila tidak terdapat :values.',
    'required_without_all' => ':attribute harus diisi bila tidak terdapat ada :values.',
    'same'                 => ':attribute dan :other harus sama.',
    'size'                 => [
        'numeric' => ':attribute harus berukuran :size.',
        'file'    => ':attribute harus berukuran :size kilobyte.',
        'string'  => ':attribute harus berukuran :size karakter.',
        'array'   => ':attribute harus mengandung :size item.',
    ],
    'starts_with'          => ':attribute harus dimulai dengan: :values.',
    'string'               => ':attribute harus berupa string.',
    'timezone'             => ':attribute harus berupa zona waktu yang valid.',
    'unique'               => ':attribute tersebut telah digunakan.',
    'uploaded'             => ':attribute gagal mengunggah.',
    'url'                  => 'Format :attribute tidak valid.',
    'uuid'                 => ':attribute harus berupa UUID yang valid.',

    // Custom Validation Language Lines

    'custom' => [
        'username' => [
            'regex' => ':attribute harus terdiri dari huruf dan angka.',
            'alpha_dash' => ':attribute harus terdiri dari huruf dan angka.',
        ],
        'email' => [
            'regex' => 'Format :attribute tidak sesuai.',
        ],
        'fullname' => [
            'regex' => ':attribute hanya berupa huruf dan spasi.',
        ],
    ],

    // Custom Validation Attributes

    'attributes' => [
        'name' => 'Nama',
        'fullname' => 'Nama lengkap',
        'username' => 'Nama pengguna',
        'email' => 'Alamat surel',
        'password' => 'Kata sandi',
    ],

];