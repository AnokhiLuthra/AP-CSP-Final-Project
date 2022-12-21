{ pkgs }: {
  deps = [
    pkgs.php80Packages.composer
    pkgs.php74
    pkgs.nodePackages.vscode-langservers-extracted
    pkgs.nodePackages.typescript-language-server
  ];
}