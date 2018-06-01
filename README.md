# PluginTaskPolyfill

A very simple example plugin, demonstrating how to polyfill PocketMine-MP's recently removed PluginTask class, for really lazy people.

This seems pointless to me, since you'll have to update code anyway.
Also, the `PluginTask` class was never very useful to begin with because you couldn't typehint `$owner` or `getOwner()` without breaking it.
However, here's the proof that it can be done, if you want to do it for some reason.

## License
Public domain. I don't care what you do with this code, mutilate it, misuse it, sell it or whatever you please.
