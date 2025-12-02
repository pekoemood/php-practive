<?php

// interface UserOperationInterface {
//   public function viewContent(): void;
//   public function editContent(): void;
//   public function deleteContent(): void;
// }

// class RegularUser implements UserOperationInterface {
//   public function viewContent(): void {
//     echo "コンテンツを閲覧します\n";
//   }

//   public function editContent(): void {
//     throw new BadMethodCallException('編集権限がありません');
//   }

//   public function deleteContent(): void {
//     throw new BadMethodCallException('削除権限がありません');
//   }
// }

// class EditorUser implements UserOperationInterface {
//   public function viewContent(): void {
//     echo "コンテンツを閲覧します\n";
//   }

//   public function editContent(): void {
//     echo "コンテンツを編集します\n";
//   }

//   public function deleteContent(): void {
//     throw new BadMethodCallException('削除権限がありません');
//   }
// }

// class AdminUser implements UserOperationInterface {
//     public function viewContent(): void {
//     echo "コンテンツを閲覧します\n";
//   }

//   public function editContent(): void {
//     echo "コンテンツを編集します\n";
//   }

//   public function deleteContent(): void {
//     echo "コンテンツを削除します\n";
//   }
// }

interface Viewable {
  public function viewContent(): void;
}

interface Editable {
  public function editContent(): void;
}

interface Deletable {
  public function deleteContent(): void;
}

class RegularUser implements Viewable {
  public function viewContent(): void {
    echo 'コンテンツの閲覧をします' . "\n";
  }
}

class EditorUser implements Viewable, Editable {
  public function viewContent(): void {
    echo "コンテンツをの閲覧をします\n";
  }

  public function editContent(): void {
    echo "コンテンツの編集をします\n";
  }
}

class AdminUser implements Viewable, Editable, Deletable {
    public function viewContent(): void {
    echo "コンテンツをの閲覧をします\n";
  }

  public function editCOntent(): void {
    echo "コンテンツの編集をします\n";
  }

  public function deleteContent(): void {
    echo "コンテンツを削除します\n";
  }
}

function edit(Editable $user): void {
  $user->editContent();
}

$regularUser = new RegularUser();
$editorUser = new EditorUser();
$adminUser = new AdminUser();

// edit($regularUser);
edit($editorUser);
edit($adminUser);