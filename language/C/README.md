# C语言（C11标准）语言教程。[C 语言教程--菜鸟教程](http://www.runoob.com/cprogramming/c-tutorial.html)。

看这个的原因是因为学习了使用了 Golang 之后，礼拜天忽然想 Golang 说是现代 C 语言，另外大学也学习 C 而且还玩的不错，温习一下。

顺便说一下，Golang 和 C 确实差别不大，在语言基本层面，其他外围就不说了。

语法结构什么的就不讲了，讲讲印象深刻的，

1. C 语言原来也能传输 函数的指针，然后用函数指针调用函数，这样实现函数回调。好棒！（Golang其实也是如此），类似Golang的 http 库的 handler 就是这样传参，印象挺深刻。
```C
int max(int x, int y)
{
    return x > y ? x : y;
}

int main(void)
{
    /* p 是函数指针 */
    int (* p)(int, int) = & max; // &可以省略
    int a, b, c, d;

    printf("请输入三个数字:");
    scanf("%d %d %d", & a, & b, & c);

    /* 与直接调用函数等价，d = max(max(a, b), c) */
    d = p(p(a, b), c);

    printf("最大的数字是: %d\n", d);

    return 0;
}
```

2. 这个应该是 C11 新支持的，"位域"。就是按位存储数据，给一个宽度，对这个宽度命名，这就是一个 "域" ，然后多个域组成一个结构体，共用内存。便于高效利用内存，比如只存 1|0  的数据。
```C
// 在结构内声明位域的形式如下：
struct
{
  type [member_name] : width ;
};
// 实例
struct
{
  unsigned int age : 3;
} Age;