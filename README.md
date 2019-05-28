# How to use filter with Nette

Register filter in ```config.neon``` as a service:
```yaml
services:
    - Ksadam\Latte\NonBreakingSpace
```
Inject filter into presenter:
```php
use Ksadam\Latte\NonBreakingSpace;
...
    /** @var NonBreakingSpace @inject */
    public $nonBreakingSpace;
...
    protected function beforeRender()
    {
        $this->template->addFilter('nonBreakingSpace', $this->nonBreakingSpace);
    }
...
```
Use filter in latte:
```
{$variable|nonBreakingSpace}
```