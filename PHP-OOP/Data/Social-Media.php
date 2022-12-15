<?php
// final
class SocicalMedia {
    public string $name;
}

/*final*/ class Facebook extends SocialMedia {
    final public function login(string $uName, string $pw): bool{
        return true;
    }
}

// error
class FakeFb extends Facebook {
    // error
    public function login(string $uName, string $pw): bool{
        return false;
    }
}