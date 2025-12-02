<?php

// class FileStorage {
//   public function save(string $data): void {
//     echo "ファイルに{$data}を保存しました";
//   }
// }

// class DataProcessor {
//   private FileStorage $storage;

//   public function __construct() {
//     $this->storage = new FileStorage();
//   }

//   public function process(string $data): void {
//     $this->storage->save($data);
//   }
// }

// $processor = new DataProcessor();
// $processor->process('SampleData');

interface StorageInterface {
  public function save(string $data): void;
}

class FileStorage implements StorageInterface {
  public function save(string $data): void {
    echo "ファイルに{$data}を保存しました\n";
  }
}

class DatabaseStorage implements StorageInterface {
  public function save(string $data): void {
    echo "データベースに{$data}を保存しました\n";
  }
}

class DataProcessor {
  //依存性の注入
  public function __construct(private StorageInterface $storage) {}

  public function processor(string $data): void {
    $this->storage->save($data);
  }
}

$processor = new DataProcessor(new FileStorage);
$processor->processor('SampleData');

$processor = new DataProcessor(new DatabaseStorage);
$processor->processor('Data');